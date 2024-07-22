<?php
fscanf(STDIN, "%d", $S);
fscanf(STDIN, "%d", $h);
fscanf(STDIN, "%d", $flow);
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%d %d", $leakHeight, $leakFlow);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("00:00:00\n");