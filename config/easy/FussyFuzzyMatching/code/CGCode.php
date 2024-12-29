<?php
$letterCase = stream_get_line(STDIN, 5 + 1, "\n");
fscanf(STDIN, "%d", $letterFuzz);
fscanf(STDIN, "%d", $numberFuzz);
$otherFuzz = stream_get_line(STDIN, 5 + 1, "\n");
$template = stream_get_line(STDIN, 100 + 1, "\n");
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    $candidate = stream_get_line(STDIN, 100 + 1, "\n");
}
for ($i = 0; $i < $n; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("true/false\n");
}