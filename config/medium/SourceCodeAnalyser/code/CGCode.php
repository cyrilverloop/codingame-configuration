<?php
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    $line = stream_get_line(STDIN, 256 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("strlen 1\n");