<?php
fscanf(STDIN, "%d %d", $xs, $ys);
fscanf(STDIN, "%d %d", $xd, $yd);
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d %d %d %d", $xi, $yi, $wi, $hi);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("distance\n");