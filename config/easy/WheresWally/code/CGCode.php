<?php
fscanf(STDIN, "%d %d", $wallyWidth, $wallyHeight);
for ($i = 0; $i < $wallyHeight; $i++)
{
    $wallyRow = stream_get_line(STDIN, $wallyWidth + 1, "\n");
}
fscanf(STDIN, "%d %d", $pictureWidth, $pictureHeight);
for ($i = 0; $i < $pictureHeight; $i++)
{
    $pictureRow = stream_get_line(STDIN, $pictureWidth + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("x y\n");