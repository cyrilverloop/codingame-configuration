<?php
fscanf(STDIN, "%d %d %d", $c, $n, $m);
for ($i = 0; $i < $c; $i++)
{
    fscanf(STDIN, "%d", $cow);
}
for ($i = 0; $i < $n; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
    for ($j = 0; $j < $m; $j++)
    {
        $square = intval($inputs[$j]);
    }
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");