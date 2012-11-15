<?php

class fibonacci
{
	function calc($limit) {
		$i = 0;
		$j = 1;
		$fibonacci = array();
		while($i + $j < $limit) {
			$k = $i + $j;
			$fibonacci[] = $k;
			$j = $i;
			$i = $k;
		}
		return $fibonacci;
	}
}
