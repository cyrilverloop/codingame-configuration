<?php
fscanf(STDIN, "%d %d", $W, $H);
fscanf(STDIN, "%f %f %f %f %f %f %f", $P1, $P2, $P3, $P4, $P5, $P6, $P7);
for ($i = 0; $i < $H; $i++)
{
    fscanf(STDIN, "%s", $line);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("price\n");
echo("quantities\n");
echo("variations\n");