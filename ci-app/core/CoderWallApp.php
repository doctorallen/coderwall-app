<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// CoderWallApp custom code igniter controller class
class CoderWallApp extends CI_Controller {

	// Custom constructor
	public function __construct() {
		// Let's call the parent/super constructor
		parent::__construct();

		// Let's alias the smarty template class for shorthand
		$this->tpl = $this->smartyparser;

	} // End __construct (constructor)
} // End class Main
