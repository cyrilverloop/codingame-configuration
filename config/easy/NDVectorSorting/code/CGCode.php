<?php
fscanf(STDIN, "%d", $D);
fscanf(STDIN, "%d", $N);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $D; $i++)
{
    $ord = intval($inputs[$i]);
}
for ($i = 0; $i < $N; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
    for ($j = 0; $j < $D; $j++)
    {
        $coord = intval($inputs[$j]);
    }
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");