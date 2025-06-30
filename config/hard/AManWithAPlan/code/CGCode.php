<?php
fscanf(STDIN, "%d %d %d", $W, $H, $N);
fscanf(STDIN, "%s", $O);
for ($i = 0; $i < $H; $i++)
{
    $line = stream_get_line(STDIN, 100 + 1, "\n");
}
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%s %d %d", $k, $x, $y);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");