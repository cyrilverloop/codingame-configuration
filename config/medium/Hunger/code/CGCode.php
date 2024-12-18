<?php
fscanf(STDIN, "%d %d", $n, $k);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $n; $i++)
{
    $swt = intval($inputs[$i]);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Feast duration\n");