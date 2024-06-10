<?php
fscanf(STDIN, "%d", $size);
for ($i = 0; $i < $size; $i++)
{
    $ROW = stream_get_line(STDIN, 40 + 1, "\n");
}
$clues = stream_get_line(STDIN, 1024 + 1, "\n");

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("grid with unused letters hidden\n");