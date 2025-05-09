<?php
fscanf(STDIN, "%d %d", $R, $C);
for ($i = 0; $i < 9; $i++)
{
    $ROW = stream_get_line(STDIN, 9 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("number of instructions then one instruction per line\n");