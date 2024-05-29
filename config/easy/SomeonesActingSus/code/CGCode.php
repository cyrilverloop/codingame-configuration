<?php
fscanf(STDIN, "%d", $L);
$F = stream_get_line(STDIN, $L + 1, "\n");
fscanf(STDIN, "%d %d", $N, $K);
for ($i = 0; $i < $N; $i++)
{
    $crewmate = stream_get_line(STDIN, $K + 1, "\n");
}
for ($i = 0; $i < $N; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("answer\n");
}