<?php
fscanf(STDIN, "%d", $numPuzzles);
for ($i = 0; $i < $numPuzzles; $i++)
{
    fscanf(STDIN, "%s", $cageLayout);
}
for ($i = 0; $i < $numPuzzles; $i++)
{
    $cageValues = stream_get_line(STDIN, 250 + 1, "\n");
}
for ($i = 0; $i < 9; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("9 space separated integers from row of solution matrix\n");
}