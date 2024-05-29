<?php
$textToDecode = stream_get_line(STDIN, 101 + 1, "\n");

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("DecodedText:string(101)\n");