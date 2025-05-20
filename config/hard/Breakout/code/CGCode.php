<?php
fscanf(STDIN, "%d %d", $bX, $bY);
fscanf(STDIN, "%d %d", $vX, $vY);
fscanf(STDIN, "%d", $pN);
fscanf(STDIN, "%d", $kN);
for ($i = 0; $i < $pN; $i++)
{
    fscanf(STDIN, "%d %d", $pX, $pY);
}
for ($i = 0; $i < $kN; $i++)
{
    fscanf(STDIN, "%d %d %d %d", $kX, $kY, $kStrength, $kPoints);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("points\n");