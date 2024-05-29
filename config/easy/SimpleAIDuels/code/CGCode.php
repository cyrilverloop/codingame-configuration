<?php
fscanf(STDIN, "%d", $nbturns);
fscanf(STDIN, "%d %s", $n, $AI1);
for ($i = 0; $i < $n; $i++)
{
    $player1 = stream_get_line(STDIN, 20 + 1, "\n");
}
fscanf(STDIN, "%d %s", $m, $AI2);
for ($i = 0; $i < $m; $i++)
{
    $player2 = stream_get_line(STDIN, 20 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("winner\n");