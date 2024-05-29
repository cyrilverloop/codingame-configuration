<?php
fscanf(STDIN, "%d %d", $r, $c);
for ($i = 0; $i < $r; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
    for ($j = 0; $j < $c; $j++)
    {
        $pixel = intval($inputs[$j]);
    }
}
fscanf(STDIN, "%d %d", $m, $n);
for ($i = 0; $i < $m; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
    for ($j = 0; $j < $n; $j++)
    {
        $weight = intval($inputs[$j]);
    }
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("output matrix\n");