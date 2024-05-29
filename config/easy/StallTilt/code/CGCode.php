<?php
fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%d", $v);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%d", $speed);
}
for ($i = 0; $i < $v; $i++)
{
    fscanf(STDIN, "%d", $bends);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");