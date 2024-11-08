<?php
fscanf(STDIN, "%d %d", $rows, $cols);
for ($i = 0; $i < $rows; $i++)
{
    for ($j = 0; $j < $cols; $j++)
    {
        fscanf(STDIN, "%d %d %d", $r, $g, $b);
    }
}
for ($i = 0; $i < $rows; $i++)
{
    for ($j = 0; $j < $cols; $j++)
    {

        // Write an answer using echo(). DON'T FORGET THE TRAILING \n
        // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

        echo("outputPixel\n");
    }
}