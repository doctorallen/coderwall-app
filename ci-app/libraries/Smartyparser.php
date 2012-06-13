<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require "Smarty-2.6.26/libs/Smarty.class.php";

// Smartyparser class that makes Smarty work with CodeIgniter
// Source: http://www.devcha.com/2007/12/smarty-as-template-engine-in-code.html
class Smartyparser extends Smarty
{
	function __construct()
	{
		$this->Smarty();

		$config =& get_config();
		
		// absolute path prevents "template not found" errors
		$this->template_dir = (!empty($config['smarty_template_dir']) ? $config['smarty_template_dir'] 
																	  : BASEPATH . '../application/views/');
																	
		$this->compile_dir  = (!empty($config['smarty_compile_dir']) ? $config['smarty_compile_dir'] 
																	 : BASEPATH . '../cache/'); //use CI's cache folder        
		
		if (function_exists('site_url')) {
    		// URL helper required
			$this->assign("site_url", site_url()); // so we can get the full path to CI easily
		}
	}
	
	function view($resource_name, $cache_id = null)   {
		if (strpos($resource_name, '.') === false) {
			$resource_name .= '.tpl';
		}
		return parent::display($resource_name, $cache_id);
	}
} // END class smarty_library
