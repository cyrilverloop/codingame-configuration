<?php
fscanf(STDIN, "%d %d %d", $N, $C, $P);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d %d", $budget, $joy);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("max_happiness\n");