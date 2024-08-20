<?php
fscanf(STDIN, "%d", $total);
for ($i = 0; $i < $total; $i++)
{
    $symbol = stream_get_line(STDIN, 2 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("combination(s)\n");