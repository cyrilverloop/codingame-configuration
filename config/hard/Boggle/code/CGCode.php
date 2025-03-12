<?php
fscanf(STDIN, "%s", $line1);
fscanf(STDIN, "%s", $line2);
fscanf(STDIN, "%s", $line3);
fscanf(STDIN, "%s", $line4);
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%s", $w);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");