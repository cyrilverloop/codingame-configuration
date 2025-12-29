<?php
$engine = stream_get_line(STDIN, 1 + 1, "\n");
for ($i = 0; $i < 3; $i++)
{
    $row = stream_get_line(STDIN, 3 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("XOXO\n");