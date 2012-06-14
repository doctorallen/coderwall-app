<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// CoderWallApp custom code igniter controller class
class CoderWallAPI{

	// Custom constructor
	public function __construct() {
		//add guzzle
		require_once BASE_URL . '/ci-app/libraries/guzzle.phar';
		//change the namespace to use client
		use Guzzle\Service\Client;
		//create a new client
		$client = new Client();
		$response = $client->get('')->send();	


	} // End __construct (constructor)
} // End class Main
