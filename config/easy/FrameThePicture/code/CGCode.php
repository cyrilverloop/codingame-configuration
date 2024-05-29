<?php
$framePattern = stream_get_line(STDIN, 10 + 1, "\n");// the ASCII art pattern to use to frame the picture
// $h: the height of the picture
// $w: the width  of the picture
fscanf(STDIN, "%d %d", $h, $w);
for ($i = 0; $i < $h; $i++)
{
    $line = stream_get_line(STDIN, 100 + 1, "\n");// the ASCII art picture line by line
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Write framed picture line by line here\n");