<?php
fscanf(STDIN, "%d %d %d %d", $w, $h, $countX, $countY);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $countX; $i++)
{
    $x = intval($inputs[$i]);
}
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $countY; $i++)
{
    $y = intval($inputs[$i]);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("0\n");