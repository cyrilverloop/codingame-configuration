<?php
$ins = stream_get_line(STDIN, 20 + 1, "\n");
for ($i = 0; $i < 7; $i++)
{
    fscanf(STDIN, "%s", $line);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("instructions\n");