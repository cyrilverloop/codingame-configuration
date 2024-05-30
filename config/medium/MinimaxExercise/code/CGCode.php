<?php
fscanf(STDIN, "%d %d", $D, $B);
$LEAFS = stream_get_line(STDIN, 40000 + 1, "\n");

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("0 0\n");