<?php
/**
 * Takuzu Solver (Easy mode)
 * No row or column may contain a sequence of three or more repeating digits
 * e.g. 1 1 0 is valid but 1 1 1 is invalid
 **/

fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    $row = stream_get_line(STDIN, $n + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Completed board\n");