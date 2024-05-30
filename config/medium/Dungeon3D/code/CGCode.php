<?php
fscanf(STDIN, "%d %d %d", $L, $R, $C);
fscanf(STDIN, "%d", $ln);
for ($i = 0; $i < $ln; $i++)
{
    $line = stream_get_line(STDIN, $C + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");