<?php
fscanf(STDIN, "%s", $startDirection);
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%s", $turn);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("direction\n");