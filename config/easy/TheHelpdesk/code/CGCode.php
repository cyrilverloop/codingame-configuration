<?php
fscanf(STDIN, "%d", $worktime);
fscanf(STDIN, "%d", $nc);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $nc; $i++)
{
    $efficiency = floatval($inputs[$i]);
}
fscanf(STDIN, "%d", $nv);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $nv; $i++)
{
    $helptime = intval($inputs[$i]);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");