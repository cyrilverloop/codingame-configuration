<?php
$query = stream_get_line(STDIN, 256 + 1, "\n");
fscanf(STDIN, "%d", $rows);
$columnNames = stream_get_line(STDIN, 256 + 1, "\n");
for ($i = 0; $i < $rows; $i++)
{
    $values = stream_get_line(STDIN, 256 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("columnNames\n");
echo("values\n");