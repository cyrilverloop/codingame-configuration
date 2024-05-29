<?php
fscanf(STDIN, "%d %d %d", $n, $m, $c);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $n; $i++)
{
    $nx = intval($inputs[$i]);
}
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $m; $i++)
{
    $mx = intval($inputs[$i]);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Fuse was not blown.\n");
echo("Maximal consumed current was XX A.\n");