<?php
fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d", $S);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $S; $i++)
{
    $vi = intval($inputs[$i]);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");