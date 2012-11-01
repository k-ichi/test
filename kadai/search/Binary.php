<?php

class BinarySearch 
{
	private $box = array();
	
	function __construct(array $box)
	{
		if(empty($box)) {
			return false;
		}
		$this->box = $box;
	}

	function Search($target) {
		$first_key = 0;
		$last_key = count($this->box) - 1 ;

		if($this->box[0] > $target || $this->box[$last_key] < $target) {
			return false;
		}

		while(1){
			
			$middle_key = ($last_key + $first_key) / 2;
			$middle_key = round($middle_key);

			$middle_value = $this->box[$middle_key];

			if($middle_value == $target) {
				return $middle_key;
			}

			if($middle_key == $last_key ) {
				return false;	
			}

			if($middle_value > $target) {
				$first_key = $first_key;
				$last_key = $middle_key;
			} else {
				$first_key = $middle_key;
				$last_key = $last_key;
			}
		}
	}
}
