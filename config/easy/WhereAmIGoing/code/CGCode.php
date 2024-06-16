<?php
fscanf(STDIN, "%d", $h);
fscanf(STDIN, "%d", $w);
for ($i = 0; $i < $h; $i++)
{
    $ROW = stream_get_line(STDIN, $w + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");