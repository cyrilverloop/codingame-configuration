<?php
fscanf(STDIN, "%d %d", $SW, $SH);
for ($i = 0; $i < $SH; $i++)
{
    $SROW = stream_get_line(STDIN, 4 + 1, "\n");
}
fscanf(STDIN, "%d %d", $FW, $FH);
for ($i = 0; $i < $FH; $i++)
{
    $FROW = stream_get_line(STDIN, 20 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");