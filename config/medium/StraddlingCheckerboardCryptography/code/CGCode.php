<?php
fscanf(STDIN, "%d", $action);
$header = stream_get_line(STDIN, 10 + 1, "\n");
$passphrase = stream_get_line(STDIN, 10 + 1, "\n");
fscanf(STDIN, "%d %d", $posslash, $posdot);
$key = stream_get_line(STDIN, 10 + 1, "\n");
$message = stream_get_line(STDIN, 1000 + 1, "\n");

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");