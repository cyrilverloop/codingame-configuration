<?php
fscanf(STDIN, "%d %d", $h, $w);
fscanf(STDIN, "%f", $t);
fscanf(STDIN, "%f", $d);
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%d %f %f %f %f", $id, $x, $y, $vx, $vy);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("{id} [{x},{y}]\n");