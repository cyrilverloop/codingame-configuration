<?php
$magic = stream_get_line(STDIN, 3 + 1, "\n");
fscanf(STDIN, "%d %d", $W, $H);
fscanf(STDIN, "%s %d", $comment, $V);
fscanf(STDIN, "%d", $maxintensity);
for ($i = 0; $i < $H; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
    for ($j = 0; $j < $W; $j++)
    {
        $intensity = intval($inputs[$j]);
    }
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");