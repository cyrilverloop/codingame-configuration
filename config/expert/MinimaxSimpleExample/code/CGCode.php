<?php
fscanf(STDIN, "%d %d", $n, $q);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $n; $i++)
{
    $letter = ($inputs[$i]);
}
for ($i = 0; $i < $q; $i++)
{
    fscanf(STDIN, "%s %d", $word, $score);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("choice score1-score2\n");