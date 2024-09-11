<?php
fscanf(STDIN, "%d %d", $x, $y);
for ($i = 0; $i < $y; $i++)
{
    $line = stream_get_line(STDIN, $x + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");