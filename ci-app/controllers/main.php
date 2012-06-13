<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Main controller class
class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('main-index.php');
	}
} // End class Main
