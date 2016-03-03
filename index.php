<?php

require 'vendor/autoload.php';

use Slim\App;
use Slim\Container;
use App\Provider;


//create dependency container and register providers
$container = new Container();
$container->register(new Provider\ControllerProvider());
//create app and inject dependency container
$app = new App($container);
//add routes to app defined in app/config/routes.php
require 'app/config/routes.php';
$app->run();

?>