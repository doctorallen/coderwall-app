<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Main controller class
class Main extends CI_Controller {

	public function index()
	{
		$this->smartyparser->assign('variable', 'Smarty!');
		$this->smartyparser->view('main-index');
	}
} // End class Main
