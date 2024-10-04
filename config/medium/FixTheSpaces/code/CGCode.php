<?php
$original = stream_get_line(STDIN, 1000 + 1, "\n");
$words = stream_get_line(STDIN, 1000 + 1, "\n");

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("original sentence with spaces\n");