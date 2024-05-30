<?php
fscanf(STDIN, "%d", $K);
fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d", $P);
for ($i = 0; $i < $K; $i++)
{
    fscanf(STDIN, "%d %d", $x, $y);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("K+1 lines of answer\n");