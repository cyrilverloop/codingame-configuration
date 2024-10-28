<?php
$definedBy = stream_get_line(STDIN, 10 + 1, "\n");
$aI = stream_get_line(STDIN, 50 + 1, "\n");
$bI = stream_get_line(STDIN, 50 + 1, "\n");
fscanf(STDIN, "%d", $x);
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("p_i(x)\n");
}