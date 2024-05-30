<?php
for ($i = 0; $i < 4; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
    for ($j = 0; $j < 4; $j++)
    {
        $CNT = intval($inputs[$j]);
    }
}
fscanf(STDIN, "%d", $FOURS);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");