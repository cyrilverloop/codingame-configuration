<?php
fscanf(STDIN, "%d %d", $capacity, $itemCount);
for ($i = 0; $i < $itemCount; $i++)
{
    fscanf(STDIN, "%d %d", $weight, $value);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");