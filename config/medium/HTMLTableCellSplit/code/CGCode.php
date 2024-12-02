<?php
fscanf(STDIN, "%d", $NR);
for ($i = 0; $i < $NR; $i++)
{
    $ROW = stream_get_line(STDIN, 1024 + 1, "\n");
}
fscanf(STDIN, "%d %s", $IS, $DS);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");