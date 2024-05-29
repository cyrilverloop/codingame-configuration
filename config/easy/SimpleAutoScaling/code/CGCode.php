<?php
fscanf(STDIN, "%d %d", $S, $M);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $S; $i++)
{
    $maxclients = intval($inputs[$i]);
}
for ($i = 0; $i < $M; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
    for ($j = 0; $j < $S; $j++)
    {
        $clients = intval($inputs[$j]);
    }
}
for ($i = 0; $i < $M; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("Number of services to start / stop\n");
}