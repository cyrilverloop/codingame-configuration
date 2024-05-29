<?php
fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d", $V);
fscanf(STDIN, "%d", $M);
for ($i = 0; $i < $M; $i++)
{
    fscanf(STDIN, "%d %d %d", $P, $L, $R);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("tree_path\n");