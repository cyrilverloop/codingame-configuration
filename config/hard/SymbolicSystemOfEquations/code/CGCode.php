<?php
fscanf(STDIN, "%d", $N);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $N; $i++)
{
    $variables = ($inputs[$i]);
}
fscanf(STDIN, "%d", $M);
for ($i = 0; $i < $M; $i++)
{
    $equation = stream_get_line(STDIN, 64 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Solved system\n");