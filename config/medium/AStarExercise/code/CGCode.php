<?php
fscanf(STDIN, "%d %d %d %d", $N, $E, $S, $G);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $N; $i++)
{
    $node = intval($inputs[$i]);
}
for ($i = 0; $i < $E; $i++)
{
    fscanf(STDIN, "%d %d %d", $x, $y, $c);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("0 0\n");