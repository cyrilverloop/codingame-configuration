<?php
fscanf(STDIN, "%d %d %d", $n, $a, $b);
fscanf(STDIN, "%d", $k);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $k; $i++)
{
    $num = intval($inputs[$i]);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Buzzle\n");