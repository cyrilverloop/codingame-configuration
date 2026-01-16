<?php
fscanf(STDIN, "%s", $type);
fscanf(STDIN, "%d", $nbLinesV1);
for ($i = 0; $i < $nbLinesV1; $i++)
{
    $lineV1 = stream_get_line(STDIN, 200 + 1, "\n");
}
fscanf(STDIN, "%d", $nbLinesV2);
for ($i = 0; $i < $nbLinesV2; $i++)
{
    $lineV2 = stream_get_line(STDIN, 200 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("diffs\n");