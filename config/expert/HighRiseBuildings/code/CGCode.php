<?php
fscanf(STDIN, "%d", $N);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $N; $i++)
{
    $canSeeFromNorth = intval($inputs[$i]);
}
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $N; $i++)
{
    $canSeeFromWest = intval($inputs[$i]);
}
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $N; $i++)
{
    $canSeeFromEast = intval($inputs[$i]);
}
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $N; $i++)
{
    $canSeeFromSouth = intval($inputs[$i]);
}
for ($i = 0; $i < $N; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
    for ($j = 0; $j < $N; $j++)
    {
        $cell = intval($inputs[$j]);
    }
}