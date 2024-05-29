<?php
for ($i = 0; $i < 9; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
    for ($j = 0; $j < 9; $j++)
    {
        $n = intval($inputs[$j]);
    }
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("true or false\n");