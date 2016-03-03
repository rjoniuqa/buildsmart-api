<?php

namespace App\Controller;

abstract class RESTController {

	public function asJsonResponse($resp, $data, $statusCode) {
		return $resp->withHeader('Content-Type', 'application/json')
			->withStatus($statusCode)
			->getBody()->write(json_encode($data));
	}
}

?>