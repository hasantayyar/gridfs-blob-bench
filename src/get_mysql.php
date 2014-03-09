<?php
/**
CREATE TABLE `benchmarks` (
  `id` int(11) NOT NULL,
  `file` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 

*/
$mysqli = new mysqli("127.0.0.1", "root", "root", "benchmarkdb");
if ($mysqli->connect_errno) {
	exit(0);
}

$res = $mysqli->query("SELECT file FROM benchmarks WHERE id=1");

