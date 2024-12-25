<?php
fscanf(STDIN, "%d %d %d", $h, $w, $n);
$alive = stream_get_line(STDIN, 9 + 1, "\n");
$dead = stream_get_line(STDIN, 9 + 1, "\n");
for ($i = 0; $i < $h; $i++)
{
    $line = stream_get_line(STDIN, $w + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("grid\n");