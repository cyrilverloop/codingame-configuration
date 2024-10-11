<?php
fscanf(STDIN, "%d %d", $h, $w);
for ($i = 0; $i < $h; $i++)
{
    $line = stream_get_line(STDIN, $w + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("0\n0\n");