<?php
fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%d %d", $h, $w);
for ($i = 0; $i < $h; $i++)
{
    $line = stream_get_line(STDIN, $w + 1, "\n");
}
for ($i = 0; $i < $h; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("|=\n");
}