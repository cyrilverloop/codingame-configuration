<?php
fscanf(STDIN, "%d", $links);
fscanf(STDIN, "%d", $mtrails);
fscanf(STDIN, "%d", $failures);
$alarmcode = stream_get_line(STDIN, $mtrails + 1, "\n");
for ($i = 0; $i < $links; $i++)
{
    $ROW = stream_get_line(STDIN, $mtrails + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");