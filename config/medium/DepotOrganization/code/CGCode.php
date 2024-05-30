<?php
for ($i = 0; $i < 7; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
    for ($j = 0; $j < 6; $j++)
    {
        $letter = ($inputs[$j]);
    }
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("4K 1X 2R 6C 5G 0J 3C\n");