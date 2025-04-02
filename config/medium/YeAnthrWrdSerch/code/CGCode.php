<?php
fscanf(STDIN, "%d %d", $height, $width);
for ($i = 0; $i < $height; $i++)
{
    $row = stream_get_line(STDIN, 100 + 1, "\n");
}
$words = stream_get_line(STDIN, 250 + 1, "\n");

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("grid with unused letters hidden\n");