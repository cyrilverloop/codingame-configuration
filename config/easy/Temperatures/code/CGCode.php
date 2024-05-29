<?php
// $n: the number of temperatures to analyse
fscanf(STDIN, "%d", $n);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    $t = intval($inputs[$i]); // a temperature expressed as an integer ranging from -273 to 5526
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("result\n");