<?php
$register = stream_get_line(STDIN, 100 + 1, "\n");
fscanf(STDIN, "%d", $goalAmount);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("list of coins\n");