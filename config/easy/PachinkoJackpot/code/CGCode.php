<?php
fscanf(STDIN, "%d", $height);
for ($i = 0; $i < $height; $i++)
{
    $increments = stream_get_line(STDIN, 101 + 1, "\n");
}
fscanf(STDIN, "%d", $prize1);
for ($i = 0; $i < $height; $i++)
{
    fscanf(STDIN, "%d", $prize);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("jackpot\n");