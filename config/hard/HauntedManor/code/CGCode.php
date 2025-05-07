<?php
fscanf(STDIN, "%d %d %d", $vampireCount, $zombieCount, $ghostCount);
fscanf(STDIN, "%d", $size);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $size; $i++)
{
    $canSeeFromTop = intval($inputs[$i]);
}
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $size; $i++)
{
    $canSeeFromBottom = intval($inputs[$i]);
}
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $size; $i++)
{
    $canSeeFromLeft = intval($inputs[$i]);
}
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $size; $i++)
{
    $canSeeFromRight = intval($inputs[$i]);
}
for ($i = 0; $i < $size; $i++)
{
    $row = stream_get_line(STDIN, $size + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");