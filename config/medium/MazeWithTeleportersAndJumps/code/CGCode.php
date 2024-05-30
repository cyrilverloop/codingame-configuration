<?php
fscanf(STDIN, "%d", $width);
fscanf(STDIN, "%d", $height);
for ($i = 0; $i < $height; $i++)
{
    $row = stream_get_line(STDIN, 48 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");