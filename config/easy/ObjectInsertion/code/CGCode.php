<?php
fscanf(STDIN, "%d %d", $a, $b);
for ($i = 0; $i < $a; $i++)
{
    $objectLine = stream_get_line(STDIN, $b + 1, "\n");
}
fscanf(STDIN, "%d %d", $c, $d);
for ($i = 0; $i < $c; $i++)
{
    $gridLine = stream_get_line(STDIN, $d + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");