<?php
for ($i = 0; $i < 3; $i++)
{
    $line = stream_get_line(STDIN, 6 + 1, "\n");// One line out of three in the string describing the starting position.
}
$commands = stream_get_line(STDIN, 12 + 1, "\n");// The sequence of ULDR-characters describing the steps to perform.

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)


// The number on the side you end up on after having performed `commands`.
echo("number\n");