<?php
fscanf(STDIN, "%d", $n);
$mazeSize = stream_get_line(STDIN, 200 + 1, "\n");
$startingPosition = stream_get_line(STDIN, 200 + 1, "\n");
$destination = stream_get_line(STDIN, 200 + 1, "\n");
fscanf(STDIN, "%d", $b);
for ($i = 0; $i < $b; $i++)
{
    $obstacle = stream_get_line(STDIN, 200 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("42\n");