<?php
$i = 0;
while($i<10){
	$box[] = mt_rand(1, 100);
	$i++;
}
print_r(quickSort($box));

function quickSort($box) {
	$left = array();
	$right = array();

	if(count($box) < 2) {
		return $box;
	}

	$pivot = array_shift($box);

	foreach($box as $b) {
		if($pivot > $b) {
			$left[] = $b;
		} else {
			$right[] = $b;
		}
	}

	$left_box = quickSort($left);
	$right_box = quickSort($right);
	$result_box = array_merge($left_box, array($pivot), $right_box);

	return $result_box;
}

