<?php
fscanf(STDIN, "%d %d %d %d", $a, $b, $c, $d);
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    $instruction = stream_get_line(STDIN, 16 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("a b c d\n");