<?php

namespace xepan\ai;

class Model_Place extends \Model_Table {
	public $table='xepan_ai_place';

	function init(){
		parent::init();

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}