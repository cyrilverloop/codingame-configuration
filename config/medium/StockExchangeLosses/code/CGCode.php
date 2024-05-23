<?php
fscanf($stdin, "%d", $n);
$inputs = explode(" ", fgets($stdin));
for ($i = 0; $i < $n; $i++)
{
    $v = intval($inputs[$i]);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");