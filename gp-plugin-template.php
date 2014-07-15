<?php

require_once( dirname( __FILE__ ) .'/includes/router.php' );
require_once( dirname( __FILE__ ) . '/things/thing.php' );

class GP_Plugin_Template extends GP_Plugin {

	var $id = 'gp_plugin_template';

	private $route_prefix = 'plugin_template';

	public function __construct() {
		parent::__construct();
		/*
		 * define actions and filters here.
		 * Use GP_Plugin::add_action() and GP_Plugin::add_filter)
		*/
		$this->add_routes();
	}
	
	function add_routes() {
		$path = '(.+?)';
		$id = '(.+)';
		$projects = 'projects';
		$project = $projects . '/' . $path;

		GP::$router->add( "/{$this->route_prefix}/$project/$id/", array(
				'GP_Route_Plugin_Template',
				'plugin_template'
			), 'get' );
	}

}

GP::$plugins->plugin_template = new GP_Plugin_Template;