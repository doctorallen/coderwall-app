<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Main controller class
class Main extends CoderWallApp {

	public function index()
	{
		$this->tpl->assign('variable', 'Smarty!');
		$this->tpl->view('main-index');
	}
} // End class Main
