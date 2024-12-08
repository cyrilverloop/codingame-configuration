<?php
fscanf(STDIN, "%d", $H);
fscanf(STDIN, "%d", $W);
for ($i = 0; $i < $H; $i++)
{
    $row = stream_get_line(STDIN, 300 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");