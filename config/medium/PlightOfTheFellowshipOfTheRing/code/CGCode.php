<?php
fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d", $M);
fscanf(STDIN, "%d", $L);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d %d", $XS, $YS);
}
for ($i = 0; $i < $M; $i++)
{
    fscanf(STDIN, "%d %d", $XO, $YO);
}
for ($i = 0; $i < $L; $i++)
{
    fscanf(STDIN, "%d %d", $N1, $N2);
}
fscanf(STDIN, "%d", $S);
fscanf(STDIN, "%d", $E);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("path\n");