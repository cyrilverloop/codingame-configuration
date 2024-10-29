<?php
fscanf(STDIN, "%d", $c);
for ($i = 0; $i < $c; $i++)
{
    $customer = stream_get_line(STDIN, 256 + 1, "\n");
}
fscanf(STDIN, "%d", $r);
for ($i = 0; $i < $r; $i++)
{
    $rule = stream_get_line(STDIN, 1024 + 1, "\n");
}
for ($i = 0; $i < $c; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("customer floor\n");
}