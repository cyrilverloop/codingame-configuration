<?php
fscanf(STDIN, "%d", $R);
fscanf(STDIN, "%d", $V);
for ($i = 0; $i < $V; $i++)
{
    fscanf(STDIN, "%d %d", $C, $N);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("1\n");