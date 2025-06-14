<?php
fscanf(STDIN, "%d", $n);
$costs = stream_get_line(STDIN, 256 + 1, "\n");
for ($i = 0; $i < $n; $i++)
{
    $row = stream_get_line(STDIN, $n + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("min_cost\n");