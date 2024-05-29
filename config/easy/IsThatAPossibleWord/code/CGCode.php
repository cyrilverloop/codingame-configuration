<?php
$input = stream_get_line(STDIN, 256 + 1, "\n");
$states = stream_get_line(STDIN, 256 + 1, "\n");
fscanf(STDIN, "%d", $numberOfTransitions);
for ($i = 0; $i < $numberOfTransitions; $i++)
{
    $transition = stream_get_line(STDIN, 256 + 1, "\n");
}
$startState = stream_get_line(STDIN, 256 + 1, "\n");
$endStates = stream_get_line(STDIN, 256 + 1, "\n");
fscanf(STDIN, "%d", $numberOfWords);
for ($i = 0; $i < $numberOfWords; $i++)
{
    $word = stream_get_line(STDIN, 256 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("true or false\n");