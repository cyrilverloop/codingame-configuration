<?php
fscanf(STDIN, "%d", $P);
for ($i = 0; $i < $P; $i++)
{
    $player = stream_get_line(STDIN, 256 + 1, "\n");
}
fscanf(STDIN, "%d", $D);
for ($i = 0; $i < $D; $i++)
{
    $dice = stream_get_line(STDIN, 256 + 1, "\n");
}
for ($i = 0; $i < 40; $i++)
{
    $boardline = stream_get_line(STDIN, 256 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");