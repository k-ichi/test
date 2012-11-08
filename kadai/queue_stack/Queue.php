<?php

class Queue
{
	private $box = array();
	function __construct($box){
		$this->box = $box;
	}

	function box(){
		return $this->box;
	}

	function enqueue($add) {
		$this->box[] = $add;
		return $this->box;
	}

	function dequeue() {
		$count = count($this->box);
		$pop = $this->box[0];
		unset($this->box[0]);
		
		for($loop = 1; $loop < $count;$loop++ ) {
			$box[] = $this->box[$loop];
		}

		$this->box = $box;
		return $pop;
	}

	function showBox() {
		print_r($this->box);
	}
}


