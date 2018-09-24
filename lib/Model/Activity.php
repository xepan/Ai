<?php

namespace xepan\ai;

class Model_Activity extends \Model_Table {
	public $table='xepan_ai_activity';

	function init(){
		parent::init();

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}