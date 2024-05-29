<?php
fscanf(STDIN, "%d", $rows);
for ($i = 0; $i < $rows; $i++)
{
    $row = stream_get_line(STDIN, 100 + 1, "\n");
}
$message = stream_get_line(STDIN, 100 + 1, "\n");

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("encode message\n");