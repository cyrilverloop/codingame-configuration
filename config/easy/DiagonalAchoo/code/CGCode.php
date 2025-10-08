<?php
fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%d", $g);
for ($i = 0; $i < $g; $i++)
{
    for ($j = 0; $j < $n; $j++)
    {
        $row = stream_get_line(STDIN, $n + 1, "\n");
    }
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Index (starts from 0)\n");
echo("C.C.\n");
echo(".C.C\n");
echo("C.H.\n");
echo(".C..\n");