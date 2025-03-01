<?php
fscanf(STDIN, "%d", $X);
fscanf(STDIN, "%d", $Y);
fscanf(STDIN, "%d", $R);
for ($i = 0; $i < $Y; $i++)
{
    $ROW = stream_get_line(STDIN, $X + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");