<?php
fscanf(STDIN, "%d", $m);
for ($i = 0; $i < $m; $i++)
{
    fscanf(STDIN, "%s", $card);
}
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%s", $card);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Winner: Player 1/Player 2\n");
echo("Number of cards\n");