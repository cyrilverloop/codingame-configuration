<?php
fscanf(STDIN, "%d", $R);
for ($i = 0; $i < $R; $i++)
{
    $line = stream_get_line(STDIN, 255 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Alice cheated in round X\n");