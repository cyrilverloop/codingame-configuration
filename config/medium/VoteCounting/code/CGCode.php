<?php
fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d", $M);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%s %d", $personName, $nbVote);
}
for ($i = 0; $i < $M; $i++)
{
    fscanf(STDIN, "%s %s", $voterName, $voteValue);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("output\n");