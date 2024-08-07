<?php
$s = stream_get_line(STDIN, 29 + 1, "\n");
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%s", $m);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("The final figure or ERROR\n");