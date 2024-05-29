<?php
fscanf(STDIN, "%d", $P);
$pattern = stream_get_line(STDIN, $P + 1, "\n");
fscanf(STDIN, "%d", $S);
$stock = stream_get_line(STDIN, $S + 1, "\n");
fscanf(STDIN, "%d %d", $H, $W);
for ($i = 0; $i < $H; $i++)
{
    $depthmap = stream_get_line(STDIN, $W + 1, "\n");
}
for ($i = 0; $i < $H; $i++)
{
    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("answer\n");
}