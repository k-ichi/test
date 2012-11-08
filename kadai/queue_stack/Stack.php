<?php

class Stack
{
	private $box = array();
	function __construct($box){
		$this->box = $box;
	}

	function box(){
		return $this->box;
	}

	function push($add) {
		$count = count($this->box);
		foreach($this->box as $b) {
			$this->box[$count] = $this->box[$count-1];
			$count--;
		}
		$this->box[0] = $add;

		return $this->box;
	}

	function pop() {
		$count = 0;
		$pop = $this->box[$count];
		unset($this->box[0]);
		$box = array();

		foreach($this->box as $b) {
			$box[] = $this->box[$count + 1];
			$count++;
		}
		$this->box = $box;

		return $pop;
	}

	function showBox() {
		print_r($this->box);
	}
}


