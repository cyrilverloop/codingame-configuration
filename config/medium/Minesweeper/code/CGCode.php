<?php
fscanf(STDIN, "%d %d", $h, $w);
fscanf(STDIN, "%d", $nb);
for ($i = 0; $i < $h; $i++)
{
    $line = stream_get_line(STDIN, 100 + 1, "\n");
}
for ($i = 0; $i < $nb; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("0 0\n");
}