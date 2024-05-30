<?php
for ($i = 0; $i < 8; $i++)
{
    $row = stream_get_line(STDIN, 8 + 1, "\n");
}
fscanf(STDIN, "%s %s", $colour, $move);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");