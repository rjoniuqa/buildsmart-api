<?php

namespace App\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use App\Controller;

class ControllerProvider implements ServiceProviderInterface {

	public function register(Container $container) {

		$container['TilesController'] = function($c) {
			return new Controller\TilesController();
		};

	}
}

?>