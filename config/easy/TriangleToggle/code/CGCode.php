<?php
fscanf(STDIN, "%d %d", $HI, $WI);
$style = stream_get_line(STDIN, 20 + 1, "\n");
fscanf(STDIN, "%d", $howManyTriangles);
for ($i = 0; $i < $howManyTriangles; $i++)
{
    fscanf(STDIN, "%d %d %d %d %d %d", $x1, $y1, $x2, $y2, $x3, $y3);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("rectangleWithCarvings\n");