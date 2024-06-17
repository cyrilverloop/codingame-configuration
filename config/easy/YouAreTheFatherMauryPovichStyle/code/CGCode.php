<?php
$mother = stream_get_line(STDIN, 500 + 1, "\n");
$child = stream_get_line(STDIN, 500 + 1, "\n");
fscanf(STDIN, "%d", $numOfPossibleFathers);
for ($i = 0; $i < $numOfPossibleFathers; $i++)
{
    $aPossibleFather = stream_get_line(STDIN, 500 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("what Maury Povich might say\n");