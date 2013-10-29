<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class InstallCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'cms:install';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Run admin installation.';
        
	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		$this->info('Installing...');

		$database = $this->getDatabaseName();

		if (!$this->confirm(sprintf('Use database name "%s"? [yes|no]', $database)))
		{
			$database = $this->ask('What is the database name then?');
		}

		// Create a local config file with the new database
		$this->writeLocalDatabaseConfigFile($database);

		// Create the new database using a new PDO connection.
		$config = Config::get('database.connections.mysql');
		$pdo = new PDO(sprintf('mysql:host=%s', $config['host']), $config['username'], $config['password']);
		$pdo->exec('CREATE DATABASE IF NOT EXISTS ' . $database);

		// Dynamically set the new database table
		Config::set('database.connections.mysql.database', $database);

		$this->call('migrate');
		$this->call('db:seed');
                $this->call('asset:publish', array('--bench' => 'boyhagemann/content'));
                $this->call('basset:build');

		$this->info('Done!');
	}

	/**
	 * @param $database
	 */
	protected function writeLocalDatabaseConfigFile($database)
	{
		$this->info('Writing local - configuration file');

		$template = "<?php

return array(

	'connections' => array(

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => '%s',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),

	),

);
";
		$content = sprintf($template, $database);
		$path = app_path() . '/config/' . App::environment();
		@mkdir($path, 0755, true);
		file_put_contents($path . '/database.php', $content);

	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('database', InputArgument::OPTIONAL, 'The database name', $this->getDatabaseName()),
		);
	}

	/**
	 * @return string
	 */
	protected function getDatabaseName()
	{
		$base = dirname(app_path());
		$table = substr($base, strrpos($base, DIRECTORY_SEPARATOR) + 1);
		$table = strtolower(str_replace(DIRECTORY_SEPARATOR, '_', $table));

		return $table;
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array();
	}

}
