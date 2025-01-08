<?php
fscanf(STDIN, "%d %d", $R, $S);
for ($i = 0; $i < $R; $i++)
{
    $removed = stream_get_line(STDIN, 15 + 1, "\n");
}
for ($i = 0; $i < $S; $i++)
{
    $sought = stream_get_line(STDIN, 15 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("2%\n");