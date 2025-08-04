<?php
fscanf(STDIN, "%d %d", $width, $height);
fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%d %d", $snakeAmount, $ladderAmount);
for ($i = 0; $i < $snakeAmount; $i++)
{
    fscanf(STDIN, "%d %d", $head, $tail);
}
for ($i = 0; $i < $ladderAmount; $i++)
{
    fscanf(STDIN, "%d %d", $top, $bottom);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");