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


		// Create the new database using a new PDO connection.
		$pdo = new PDO(sprintf('mysql:host=%s', $this->argument('host')), $this->argument('username'), $this->argument('password'));
		$pdo->exec('CREATE DATABASE IF NOT EXISTS ' . $this->argument('database'));

		// Dynamically set the new database table
		Config::set('database.connections.mysql.database', $this->argument('database'));

		// Create a local config file with the new database
		$this->writeLocalDatabaseConfigFile();

		$this->call('migrate');
		$this->call('db:seed');
                $this->call('asset:publish', array('--bench' => 'boyhagemann/content'));
//                $this->call('basset:build');

		$this->info('Done!');
	}

	/**
	 * @param $database
	 */
	protected function writeLocalDatabaseConfigFile()
	{
		$this->info('Writing local configuration file');

		$template = "<?php

return array(

	'connections' => array(

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => '%s',
			'database'  => '%s',
			'username'  => '%s',
			'password'  => '%s',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),

	),

);
";
		$content = sprintf($template, $this->argument('host'), $this->argument('database'),  $this->argument('username'), $this->argument('password'));
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
		$config = Config::get('database.connections.mysql');
		$database = $this->getDatabaseName();

		return array(
			array('host', 		InputArgument::OPTIONAL, 'The database host', $config['host']),
			array('database', 	InputArgument::OPTIONAL, 'The database name', $database),
			array('username', 	InputArgument::OPTIONAL, 'The database username', $config['username']),
			array('password', 	InputArgument::OPTIONAL, 'The database password', $config['password']),
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
