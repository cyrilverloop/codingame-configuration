<?php
fscanf(STDIN, "%d", $SIZE);
for ($i = 0; $i < $SIZE; $i++)
{
    $ROW = stream_get_line(STDIN, $SIZE + 1, "\n");
}
for ($i = 0; $i < $SIZE; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("revealed row\n");
}