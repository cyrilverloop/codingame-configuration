<?php
fscanf(STDIN, "%d %d", $width, $height);
fscanf(STDIN, "%d", $players);
fscanf(STDIN, "%d", $doors);
fscanf(STDIN, "%d", $turns);
for ($i = 0; $i < $players; $i++)
{
    fscanf(STDIN, "%d %d", $rX, $rY);
}
for ($i = 0; $i < $doors; $i++)
{
    fscanf(STDIN, "%d %s", $coord, $wall);
}
for ($i = 0; $i < $turns; $i++)
{
    fscanf(STDIN, "%d %d %s", $tX, $tY, $direction);
}
for ($i = 0; $i < $players; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("answer\n");
}