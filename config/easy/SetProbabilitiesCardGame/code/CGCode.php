<?php
// $n: the number of cards on the table
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%d %s %s %s", $number, $shading, $color, $shape);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("0.5000\n");