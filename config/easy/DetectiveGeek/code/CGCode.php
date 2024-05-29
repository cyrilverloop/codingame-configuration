<?php
$time = stream_get_line(STDIN, 32 + 1, "\n");
$address = stream_get_line(STDIN, 2048 + 1, "\n");

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");