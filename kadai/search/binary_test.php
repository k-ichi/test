<?php

require_once "Binary.php";

$target_success = 20;
$target_failure_1 = 100;
$target_failure_2 = -100;
$target_failure_3 = 21;

$box = array();
for($loop = -50; $loop < 50; $loop = $loop + 2) {
	$box[] = $loop;
}

$bs = new BinarySearch($box);

try {
	//failure
	$failure_1 = $bs->Search($target_failure_1);
	$failure_2 = $bs->Search($target_failure_2);

	if($failure_1 || $failure_2) {
		echo "binary search file is broken";
	}

	
	$failure_3 = $bs->Search($target_failure_3);
	if($failure == false){
		//success
	} else {
		echo "binary search file is broken";
	}

	$result = $bs->Search($target_success);

} catch (Exception $e) {
		echo $e->getMessage();
}

//success
if($box[$result] == $target_success) {
	echo "OK";
	exit();
} 	

echo "binary search file is broken";
exit();

