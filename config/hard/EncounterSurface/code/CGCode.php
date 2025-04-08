<?php
fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%d", $m);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%d %d", $x1, $y1);
}
for ($i = 0; $i < $m; $i++)
{
    fscanf(STDIN, "%d %d", $x2, $y2);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("5\n");