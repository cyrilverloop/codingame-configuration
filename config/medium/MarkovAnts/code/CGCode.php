<?php
fscanf(STDIN, "%d", $step);
fscanf(STDIN, "%d %d", $w, $h);
for ($i = 0; $i < $h; $i++)
{
    $row = stream_get_line(STDIN, 31 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("average time to reach food\n");