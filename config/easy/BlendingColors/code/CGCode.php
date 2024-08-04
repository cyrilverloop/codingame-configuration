<?php
fscanf(STDIN, "%d %d", $S, $P);
for ($i = 0; $i < $S; $i++)
{
    $line = stream_get_line(STDIN, 127 + 1, "\n");
}
for ($i = 0; $i < $P; $i++)
{
    fscanf(STDIN, "%d %d", $x, $y);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");