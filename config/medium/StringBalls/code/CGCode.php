<?php
fscanf(STDIN, "%d", $radius);
$center = stream_get_line(STDIN, 20 + 1, "\n");

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Number of points in the ball\n");