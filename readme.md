# Cms

With this package you can:
- manage your resources.
- have a navigation layer for your crud controllers.
- have an admin dashboard with a list of apps.

## How to install

Clone the project in your folder of choice
```
clone https://github.com/boyhagemann/Cms yourfolder
```

Then go to that directory and install all dependencies 

```
cd yourfolder
composer install
```

After that, you run the install command. This will which database will be used. 
```
php artisan install
```

If the database does not exist, it will be created for you. 
It uses localhost as a host, root as a username and '' as password for testing purposes only.
If your host, username or password differs, please change the config file located at "app/config/local/database.php".


## Let's get started
After a succesful installation, go to your browser and point it to your new cms project. 
You will see a blank screen for now (will add some content soon).

Go to the url "/admin". There you will see 2 'apps'.

## Apps
The cms project is made of apps. The admin is a dasboard with an overview of your apps.
Just like your favorite smartphone. 
Each cms app can have its own navigation, located in the left and right upper corner.
