<?php
for ($i = 0; $i < 10; $i++)
{
    $row = stream_get_line(STDIN, 10 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("shortest distance in km\n");