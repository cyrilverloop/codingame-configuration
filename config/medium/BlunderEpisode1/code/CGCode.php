<?php
fscanf($stdin, "%d %d", $L, $C);
for ($i = 0; $i < $L; $i++)
{
    $row = stream_get_line($stdin, 101 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");