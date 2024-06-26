<?php
fscanf(STDIN, "%d", $size);
fscanf(STDIN, "%d", $thickness);
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    $logoLine = stream_get_line(STDIN, 10 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("The Logo\n");