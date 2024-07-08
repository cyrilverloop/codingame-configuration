<?php
$mode = stream_get_line(STDIN, 7 + 1, "\n");
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%d %d", $string, $fret);
}
for ($i = 0; $i < $n; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("string1/fret1 string2/fret2...\n");
}