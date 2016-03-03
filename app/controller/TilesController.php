<?php

namespace App\Controller;

class TilesController extends RESTController {

	public function __invoke($req, $resp, $args){
		return $this->asJsonResponse($resp, 'hello world', 200);
	}
}

?>