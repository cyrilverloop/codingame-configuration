<?php
$start = stream_get_line(STDIN, 100 + 1, "\n");
$end = stream_get_line(STDIN, 100 + 1, "\n");
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%s %s", $station1, $station2);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");