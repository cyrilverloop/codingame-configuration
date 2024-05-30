<?php
fscanf(STDIN, "%d %d", $xs, $ys);
fscanf(STDIN, "%d %d", $xr, $yr);
fscanf(STDIN, "%d %d", $w, $h);
for ($i = 0; $i < $h; $i++)
{
    fscanf(STDIN, "%s", $l);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("go return\n");