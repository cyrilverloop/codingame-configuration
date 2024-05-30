<?php
fscanf(STDIN, "%d", $K);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $K; $i++)
{
    $A = floatval($inputs[$i]);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");