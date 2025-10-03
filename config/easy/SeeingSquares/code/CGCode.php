<?php
fscanf(STDIN, "%d %d", $r, $c);
for ($i = 0; $i < $r; $i++)
{
    $row = stream_get_line(STDIN, $c + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("[][][]\n");