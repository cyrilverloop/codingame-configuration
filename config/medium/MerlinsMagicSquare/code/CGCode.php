<?php
$row1 = stream_get_line(STDIN, 5 + 1, "\n");
$row2 = stream_get_line(STDIN, 5 + 1, "\n");
$row3 = stream_get_line(STDIN, 5 + 1, "\n");
$allButtonsPressed = stream_get_line(STDIN, 100 + 1, "\n");

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer (a single digit)\n");