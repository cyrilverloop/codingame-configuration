<?php
fscanf(STDIN, "%d %d", $w, $h);
fscanf(STDIN, "%d %d", $startRow, $startCol);
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    for ($j = 0; $j < $h; $j++)
    {
        $mapRow = stream_get_line(STDIN, $w + 1, "\n");
    }
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("mapIndex\n");