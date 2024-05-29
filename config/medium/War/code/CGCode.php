<?php
// $n: the number of cards for player 1
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    // $cardp1: the n cards of player 1
    fscanf(STDIN, "%s", $cardp1);
}
// $m: the number of cards for player 2
fscanf(STDIN, "%d", $m);
for ($i = 0; $i < $m; $i++)
{
    // $cardp2: the m cards of player 2
    fscanf(STDIN, "%s", $cardp2);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("PAT\n");