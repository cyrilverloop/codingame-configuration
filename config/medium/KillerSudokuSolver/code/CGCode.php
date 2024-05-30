<?php
for ($i = 0; $i < 9; $i++)
{
    fscanf(STDIN, "%s %s", $gridLine, $gridCages);
}
$cages = stream_get_line(STDIN, 250 + 1, "\n");

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("solution\n");