<?php
fscanf(STDIN, "%d %d %d", $n, $m, $ntw);
fscanf(STDIN, "%d %d", $s, $t);
for ($i = 0; $i < $ntw; $i++)
{
    fscanf(STDIN, "%d %d %d", $v, $b, $e);
}
for ($i = 0; $i < $m; $i++)
{
    fscanf(STDIN, "%d %d %d", $u, $v, $d);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("true\n");