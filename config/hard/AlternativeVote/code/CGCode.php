<?php
fscanf(STDIN, "%d", $C);
for ($i = 0; $i < $C; $i++)
{
    $name = stream_get_line(STDIN, 50 + 1, "\n");
}
fscanf(STDIN, "%d", $V);
for ($i = 0; $i < $V; $i++)
{
    $votes = stream_get_line(STDIN, 256 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");