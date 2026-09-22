<?php
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    $company = stream_get_line(STDIN, 50 + 1, "\n");
}
fscanf(STDIN, "%d", $a);
for ($i = 0; $i < $a; $i++)
{
    $attack = stream_get_line(STDIN, 50 + 1, "\n");
}
for ($i = 0; $i < $n; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("company:status\n");
}