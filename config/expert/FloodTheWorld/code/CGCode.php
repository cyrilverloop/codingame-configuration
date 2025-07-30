<?php
fscanf(STDIN, "%d", $surfacePointCount);
for ($i = 0; $i < $surfacePointCount; $i++)
{
    fscanf(STDIN, "%d %d", $x, $y);
}
fscanf(STDIN, "%d", $xPortal);
fscanf(STDIN, "%d", $townCount);
for ($i = 0; $i < $townCount; $i++)
{
    fscanf(STDIN, "%d %s", $xTown, $townName);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("lastFloodedTownName\n");