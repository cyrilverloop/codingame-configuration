<?php
fscanf(STDIN, "%d", $imageSize);
for ($i = 0; $i < $imageSize; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
    for ($j = 0; $j < $imageSize; $j++)
    {
        $pixel = intval($inputs[$j]);
    }
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");