<?php
$cipher = stream_get_line(STDIN, 50 + 1, "\n");
$clear = stream_get_line(STDIN, 50 + 1, "\n");
$clearMe = stream_get_line(STDIN, 50 + 1, "\n");
$cipherMe = stream_get_line(STDIN, 50 + 1, "\n");

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("cleared\n");
echo("write ciphered\n");