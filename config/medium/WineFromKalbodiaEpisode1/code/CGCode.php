<?php
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    $request = stream_get_line(STDIN, 100 + 1, "\n");
}
for ($i = 0; $i < $N; $i++)
{
    $crate = stream_get_line(STDIN, 100 + 1, "\n");
}
for ($i = 0; $i < $N; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("answer\n");
}