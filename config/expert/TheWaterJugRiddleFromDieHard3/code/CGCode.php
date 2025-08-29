<?php
fscanf(STDIN, "%d", $target);
fscanf(STDIN, "%d", $containersCount);
for ($i = 0; $i < $containersCount; $i++)
{
    fscanf(STDIN, "%d", $capacity);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("count\n");