<?php
for ($i = 0; $i < 5; $i++)
{
    $pools = stream_get_line(STDIN, 100 + 1, "\n");
}
for ($i = 0; $i < 60; $i++)
{
    $games = stream_get_line(STDIN, 100 + 1, "\n");
}
for ($i = 0; $i < 4; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("TEAM_X - TEAM_Y\n");
}