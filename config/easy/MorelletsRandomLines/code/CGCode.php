<?php
fscanf(STDIN, "%d %d %d %d", $xA, $yA, $xB, $yB);
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%d %d %d", $a, $b, $c);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("YES|NO|ON A LINE\n");