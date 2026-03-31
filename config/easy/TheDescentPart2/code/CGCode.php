<?php
fscanf(STDIN, "%d %d", $w, $h);
for ($i = 0; $i < $h; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
    for ($j = 0; $j < $w; $j++)
    {
        $mountainHeight = intval($inputs[$j]);
    }
}
fscanf(STDIN, "%d %d", $a, $b);
fscanf(STDIN, "%d", $t);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Save the starship\n");