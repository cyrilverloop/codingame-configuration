<?php
fscanf(STDIN, "%d", $numEquations);
for ($i = 0; $i < $numEquations; $i++)
{
    $equation = stream_get_line(STDIN, 1000 + 1, "\n");
}
for ($i = 0; $i < $numEquations; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("x=<<expression>> (expression must be rearranged to standard form)\n");
}