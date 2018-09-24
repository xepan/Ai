<?php

namespace xepan\ai;

class Model_Event extends \Model_Table {
	public $table='xepan_ai_event';

	function init(){
		parent::init();

		// what happened
			// posted, blog, image, advertized
		// who did
			// caratcterstics of who, employee, visitor with unique id, 
			// age, sex, location, previous_connection_path*
		// on which thing/ document
			// on whcih page he landed, content visited summarized (converted to tokens*)
			// which product group is included (group), price 
		


		$this->add('dynamic_model/Controller_AutoCreator');
	}
}