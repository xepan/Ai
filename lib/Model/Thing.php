<?php

namespace xepan\ai;

class Model_Thing extends \Model_Table {
	public $table='xepan_ai_thing';

	function init(){
		parent::init();

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}