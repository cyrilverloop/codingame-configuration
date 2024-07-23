<?php
fscanf(STDIN, "%d", $n);
$r = array();
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    $r[$i] = floatval($inputs[$i]);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("reflected light\n");