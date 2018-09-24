<?php

namespace xepan\ai;

class Model_Person extends \Model_Table {
	public $table='xepan_ai_person';

	function init(){
		parent::init();

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}