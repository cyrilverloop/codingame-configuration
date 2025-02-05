<?php
$sqlQuery = stream_get_line(STDIN, 256 + 1, "\n");
fscanf(STDIN, "%d", $ROWS);
$tableHeader = stream_get_line(STDIN, 256 + 1, "\n");
for ($i = 0; $i < $ROWS; $i++)
{
    $tableRow = stream_get_line(STDIN, 256 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("outputTableWithColumnTitlesNoRowIndexes\n");