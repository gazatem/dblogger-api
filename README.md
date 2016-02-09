## Api interface for DbLogger

DbLogger-Api is an api server for the [DbLogger](https://github.com/gazatem/dblogger) package.

If you haven't already set up DbLogger then first you need to install and configure DbLogger. 
This package is only a gui interface. DbLogger must be enable to log data for gui interface.  

## Installation

Add the package to your ```composer.json``` file

```
"gazatem/dblogger-api": "dev-master"
```

Add the service provider to your ```config/app.php``` file

```
Gazatem\DBLoggerApi\DBLoggerApiServiceProvider::class,
```

Publish the configuration file(s)

```
php artisan vendor:publish --provider="Gazatem\DBLoggerGui\DBLoggerApiServiceProvider" 
```

You can change route prefix by editing ```route-prefix``` in ```config/dblogger-api.php```.

```
'route-prefix' => 'api/logs'
```