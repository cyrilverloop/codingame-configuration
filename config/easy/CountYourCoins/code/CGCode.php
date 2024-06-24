<?php
fscanf(STDIN, "%d", $valueToReach);
fscanf(STDIN, "%d", $N);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $N; $i++)
{
    $count = intval($inputs[$i]);
}
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $N; $i++)
{
    $value = intval($inputs[$i]);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("-1\n");