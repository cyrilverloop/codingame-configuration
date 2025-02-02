<?php
fscanf(STDIN, "%d %d %d", $L, $W, $H);
for ($i = 0; $i < $L; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
    for ($j = 0; $j < $H; $j++)
    {
        $row = ($inputs[$j]);
    }
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("activity density\n");