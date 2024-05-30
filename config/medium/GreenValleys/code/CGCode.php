<?php
fscanf(STDIN, "%d", $H);
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
    for ($j = 0; $j < $N; $j++)
    {
        $h = intval($inputs[$j]);
    }
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("ANSWER\n");