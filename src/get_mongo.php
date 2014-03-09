<?php
/**
look at put.sh
*/
$m = new Mongo();
$db = $m->benchmark;
$grid = $db->getGridFS();
if ($grid) {
	$file = $grid->get(new MongoId('531c4ed9577744ea30e21449'));
	if(!$file) exit(0);
}
//print_r($file);
