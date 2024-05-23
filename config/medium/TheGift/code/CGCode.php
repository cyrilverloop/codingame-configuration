<?php
fscanf($stdin, "%d", $N);
fscanf($stdin, "%d", $C);
for ($i = 0; $i < $N; $i++)
{
    fscanf($stdin, "%d", $B);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("IMPOSSIBLE\n");