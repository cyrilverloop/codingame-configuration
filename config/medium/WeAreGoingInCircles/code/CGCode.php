<?php
fscanf(STDIN, "%d %d", $w, $h);
for ($i = 0; $i < $h; $i++)
{
    fscanf(STDIN, "%s", $row);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("number_of_loops\n");