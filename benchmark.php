<?php
$exec = $argv[1];
$repeat = $argv[2];
$time1 = microtimef(true);
for ($i = 0; $i < $repeat; $i++) {
    $a = exec("php ". $exec);
}
$time = microtimef(true) - $time1;
echo 'total exec time '.$time."\n";
echo 'avg exec time : '.($time/$repeat)."\n";

function microtimef()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
