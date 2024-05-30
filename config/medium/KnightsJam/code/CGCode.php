<?php
for ($i = 0; $i < 3; $i++)
{
    $line = stream_get_line(STDIN, 4 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("-1\n");