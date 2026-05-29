<?php
fscanf(STDIN, "%s", $faces);
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < 5; $i++)
{
    $image = stream_get_line(STDIN, 23 + 1, "\n");
}
fscanf(STDIN, "%d %d", $w, $h);
for ($i = 0; $i < $h; $i++)
{
    $die = stream_get_line(STDIN, $w + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("die templates!\n");