<?php
$operation = stream_get_line(STDIN, 256 + 1, "\n");
fscanf(STDIN, "%d", $pseudoRandomNumber);
for ($i = 0; $i < 3; $i++)
{
    $rotor = stream_get_line(STDIN, 27 + 1, "\n");
}
$message = stream_get_line(STDIN, 1024 + 1, "\n");

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("message\n");