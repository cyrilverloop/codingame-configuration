<?php
fscanf(STDIN, "%d", $width);
fscanf(STDIN, "%d", $height);
fscanf(STDIN, "%d", $t);
for ($i = 0; $i < $height; $i++)
{
    fscanf(STDIN, "%s", $line);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");