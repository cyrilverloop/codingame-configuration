<?php
for ($i = 0; $i < 3; $i++)
{
    $line = stream_get_line(STDIN, 6 + 1, "\n");// One line out of three in the string describing the arrangement of the numbers.
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

// Output one of "right-handed", "left-handed" and "degenerate".
echo("handedness\n");