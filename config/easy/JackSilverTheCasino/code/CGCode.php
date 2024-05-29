<?php
fscanf(STDIN, "%d", $ROUNDS);
fscanf(STDIN, "%d", $CASH);
for ($i = 0; $i < $ROUNDS; $i++)
{
    $PLAY = stream_get_line(STDIN, 1024 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("cash of the target after playing\n");