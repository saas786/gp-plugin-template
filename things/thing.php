<?php

/* Can inherit fro GP_Thing if has a custom db table */

class GP_Plugin_Template_Things {

	var $var1;
	var $var2 = array();

	function __construct( $data ){
		foreach ( $data as $key => $value ) {
			if ( property_exists( $this, $key ) ) {
				$this->$key = $value;
			}
		}

	}

}