<?php
$arr =[1,2,3,4,5,6,7,8,9,10];
if(isset($_GET['pages'])) {
	$pages = $_GET['pages'];
} else {
	$pages = 1;
}

$pagesNum = 2;
$start = ($pages-1)*$pageNum;
$end = 2;

for($i = $start; $i < $end; $i++) {
}
?>