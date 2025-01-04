<?php
fscanf(STDIN, "%d %d %d", $m, $n, $p);
fscanf(STDIN, "%d %d", $countA, $countB);
for ($i = 0; $i < $countA; $i++)
{
    fscanf(STDIN, "%d %d %f", $row, $column, $value);
}
for ($i = 0; $i < $countB; $i++)
{
    fscanf(STDIN, "%d %d %f", $row, $column, $value);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("row column value\n");