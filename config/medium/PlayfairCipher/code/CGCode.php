<?php
for ($i = 0; $i < 5; $i++)
{
    $keyTable = stream_get_line(STDIN, 50 + 1, "\n");
}
$action = stream_get_line(STDIN, 50 + 1, "\n");
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    $message = stream_get_line(STDIN, 900 + 1, "\n");
}
for ($i = 0; $i < $N; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("answer\n");
}