<?php
$box = array();
$i = 0;
while($i<10){
	$box[] = mt_rand(1, 100);
	$i++;
}

$loop = count($box);
for($loop = 0;$loop < count($box);$loop++) {
	for($loop2 = $loop;$loop2 < count($box); $loop2++) {
		if($box[$loop] > $box[$loop2]) {
			$a = $box[$loop];
			$box[$loop] = $box[$loop2];
			$box[$loop2] = $a;
		}
	}
}
print_r($box);

