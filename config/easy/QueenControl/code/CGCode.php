<?php
$color = stream_get_line(STDIN, 5 + 1, "\n");
for ($i = 0; $i < 8; $i++)
{
    $line = stream_get_line(STDIN, 8 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");