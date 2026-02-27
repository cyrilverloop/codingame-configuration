<?php
$program = stream_get_line(STDIN, 500 + 1, "\n");// Space-separated hex bytes representing CPU instructions

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)


// Print the final value of each register R0, R1, R2, R3, one value per line
echo("answer\n");