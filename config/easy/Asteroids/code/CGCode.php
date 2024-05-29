<?php
fscanf(STDIN, "%d %d %d %d %d", $W, $H, $T1, $T2, $T3);
for ($i = 0; $i < $H; $i++)
{
    fscanf(STDIN, "%s %s", $firstPictureRow, $secondPictureRow);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");