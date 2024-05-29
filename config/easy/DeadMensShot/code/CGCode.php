<?php
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d %d", $x, $y);
}
fscanf(STDIN, "%d", $M);
for ($i = 0; $i < $M; $i++)
{
    fscanf(STDIN, "%d %d", $x, $y);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("hit_or_miss\n");