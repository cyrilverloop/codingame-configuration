<?php
fscanf(STDIN, "%d %d", $W, $H);
for ($i = 0; $i < $H; $i++)
{
    $line = stream_get_line(STDIN, 1024 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");