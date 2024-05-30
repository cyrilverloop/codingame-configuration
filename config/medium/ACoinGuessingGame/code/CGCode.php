<?php
fscanf(STDIN, "%d %d", $N, $T);
for ($i = 0; $i < $T; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
    for ($j = 0; $j < $N; $j++)
    {
        $C = intval($inputs[$j]);
    }
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("2 4 6...\n");