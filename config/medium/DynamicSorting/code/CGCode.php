<?php
$expression = stream_get_line(STDIN, 256 + 1, "\n");
$types = stream_get_line(STDIN, 256 + 1, "\n");
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    $ROW = stream_get_line(STDIN, 256 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");