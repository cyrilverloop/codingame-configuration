<?php
fscanf(STDIN, "%d", $h);
for ($i = 0; $i < $h; $i++)
{
    $row = stream_get_line(STDIN, 200 + 1, "\n");
}
for ($i = 0; $i < $h; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("answer\n");
}