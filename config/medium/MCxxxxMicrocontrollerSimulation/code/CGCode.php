<?php
fscanf(STDIN, "%d", $k);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $k; $i++)
{
    $inputData = intval($inputs[$i]);
}
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    $lineOfCode = stream_get_line(STDIN, 100 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("output data\n");