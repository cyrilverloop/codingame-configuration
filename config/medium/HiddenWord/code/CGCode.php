<?php
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%s", $aword);
}
fscanf(STDIN, "%d %d", $h, $w);
for ($i = 0; $i < $h; $i++)
{
    fscanf(STDIN, "%s", $line);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("word\n");