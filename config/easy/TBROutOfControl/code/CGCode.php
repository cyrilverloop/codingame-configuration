<?php
fscanf(STDIN, "%d", $b);
for ($i = 0; $i < $b; $i++)
{
    $title = stream_get_line(STDIN, 1024 + 1, "\n");
}
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    $name = stream_get_line(STDIN, 1024 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Your TBR is out of control Clara!\n");