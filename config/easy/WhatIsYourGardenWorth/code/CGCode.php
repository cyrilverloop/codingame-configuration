<?php
fscanf(STDIN, "%d", $numOfLinesOfOfferingStatement);
for ($i = 0; $i < $numOfLinesOfOfferingStatement; $i++)
{
    $offer = stream_get_line(STDIN, 500 + 1, "\n");
}
fscanf(STDIN, "%d", $gardenHeight);
for ($i = 0; $i < $gardenHeight; $i++)
{
    $gardenRow = stream_get_line(STDIN, 500 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("worth\n");