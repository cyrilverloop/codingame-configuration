<?php
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    $swap = stream_get_line(STDIN, 6 + 1, "\n");
}
fscanf(STDIN, "%d", $length);
$encodedMessage = stream_get_line(STDIN, 10000 + 1, "\n");

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("decoded_message\n");