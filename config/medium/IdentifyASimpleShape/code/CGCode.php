<?php
for ($i = 0; $i < 20; $i++)
{
    $line = stream_get_line(STDIN, 39 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("LINE (0,0) (19,19)\n");