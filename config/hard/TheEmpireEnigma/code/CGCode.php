<?php
$offset = stream_get_line(STDIN, 20 + 1, "\n");
fscanf(STDIN, "%d", $length);
for ($i = 0; $i < $length; $i++)
{
    fscanf(STDIN, "%d", $C);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Hello\n");