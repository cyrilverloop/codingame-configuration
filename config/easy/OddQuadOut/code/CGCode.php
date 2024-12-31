<?php
fscanf(STDIN, "%d", $sideSize);
for ($i = 0; $i < $sideSize; $i++)
{
    $ROW = stream_get_line(STDIN, 30 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("the number of the Odd Quadrant Out\n");
echo("value of the Odd Quadrant Out\n");
echo("value of the other Quadrants\n");