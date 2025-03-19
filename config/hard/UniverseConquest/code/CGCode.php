<?php
fscanf(STDIN, "%d %d", $planets, $hyperspaceRoads);
for ($i = 0; $i < $planets; $i++)
{
    fscanf(STDIN, "%s %d", $faction, $ships);
}
for ($i = 0; $i < $hyperspaceRoads; $i++)
{
    fscanf(STDIN, "%d %d", $planet1, $planet2);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");