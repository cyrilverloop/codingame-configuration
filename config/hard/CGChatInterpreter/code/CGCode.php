<?php
fscanf(STDIN, "%d %d", $numGood, $numBad);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $numGood; $i++)
{
    $goodNoun = ($inputs[$i]);
}
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $numBad; $i++)
{
    $badNoun = ($inputs[$i]);
}
fscanf(STDIN, "%d", $numLines);
for ($i = 0; $i < $numLines; $i++)
{
    $line = stream_get_line(STDIN, 256 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("result\n");