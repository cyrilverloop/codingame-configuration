<?php
$teams = stream_get_line(STDIN, 100 + 1, "\n");
$scores1 = stream_get_line(STDIN, 200 + 1, "\n");
$scores2 = stream_get_line(STDIN, 200 + 1, "\n");
for ($i = 0; $i < 2; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("Team name: score minutes_leading\n");
}