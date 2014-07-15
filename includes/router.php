<?php
class GP_Route_Plugin_Template extends GP_Route_Main {

	function __construct() {
		$this->template_path = dirname( dirname( __FILE__ ) ) . '/templates/';
	}

	function plugin_template( $project_path, $id ) {
		$project = GP::$project->by_path( $project_path );

		if ( ! $project ) {
			$this->die_with_404();
		}

		//Check permissions?

		$this->tmpl( 'template', get_defined_vars() );

	}

}