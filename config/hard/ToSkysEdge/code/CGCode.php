<?php
fscanf(STDIN, "%d", $Y);
fscanf(STDIN, "%d", $C);
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d %d", $AGE, $NUMBER);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");