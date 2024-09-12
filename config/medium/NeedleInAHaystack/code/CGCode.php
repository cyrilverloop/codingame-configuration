<?php
fscanf(STDIN, "%d %d", $w, $h);
for ($i = 0; $i < $h; $i++)
{
    $line = stream_get_line(STDIN, 500 + 1, "\n");
}
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    $caseline = stream_get_line(STDIN, 200 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");