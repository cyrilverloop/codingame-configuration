<?php
fscanf(STDIN, "%d %d", $H, $W);
for ($i = 0; $i < $H; $i++)
{
    fscanf(STDIN, "%s", $ROW);
}
fscanf(STDIN, "%d %d", $R, $C);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");