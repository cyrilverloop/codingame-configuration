<?php
fscanf(STDIN, "%d", $PN);
fscanf(STDIN, "%d", $FN);
fscanf(STDIN, "%d", $FM);
for ($i = 0; $i < $PN; $i++)
{
    $ROW = stream_get_line(STDIN, 256 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");