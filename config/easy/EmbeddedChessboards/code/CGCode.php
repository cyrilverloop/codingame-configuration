<?php
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%d %d %d", $row, $col, $isWhite);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");