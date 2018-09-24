<?php


namespace xepan\ai;


class Controller_DataCollect extends \AbstractController {
	function init(){
		parent::init();

		if(!$this->owner instanceof \xepan\base\Model_Table){
			throw $this->exception('This controller is written to be added in xepan\base\Model_Table only');
		}

		$this->owner->addHook('afterInsert',$this,[],7);
		$this->owner->addHook('beforeSave',$this,[],7);
	}

	function beforeSave(){

	}

	function afterInsert($m){

	}
}