<?php

use Symfony\Component\Yaml\Yaml;
	
$routes = Yaml::parse(file_get_contents('app/config/routes.yml'));

foreach($routes as $routeName=>$route){
	$controller = $route['controller'];
	$path = $route['path'];
	$methods = $route['methods'];
	$app->map($methods, $path, $controller)->setName($routeName);
}

?>