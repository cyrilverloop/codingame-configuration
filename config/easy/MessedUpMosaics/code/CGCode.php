<?php
fscanf(STDIN, "%d", $N);
$pattern = stream_get_line(STDIN, 128 + 1, "\n");
for ($i = 0; $i < $N; $i++)
{
    $row = stream_get_line(STDIN, 128 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("(x,y)\n");