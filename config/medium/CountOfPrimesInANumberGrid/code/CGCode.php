<?php
fscanf(STDIN, "%d %d", $R, $C);
for ($i = 0; $i < $R; $i++)
{
    $row = stream_get_line(STDIN, 128 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");