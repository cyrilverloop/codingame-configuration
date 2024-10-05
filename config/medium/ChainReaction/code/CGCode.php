<?php
fscanf(STDIN, "%d", $r);
fscanf(STDIN, "%d", $b);
for ($i = 0; $i < $r; $i++)
{
    for ($j = 0; $j < 3; $j++)
    {
        $row = stream_get_line(STDIN, 500 + 1, "\n");
    }
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("row col\n");
echo("number_of_rotations\n");