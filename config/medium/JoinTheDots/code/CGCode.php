<?php
fscanf(STDIN, "%d %d", $H, $W);
for ($i = 0; $i < $H; $i++)
{
    $row = stream_get_line(STDIN, $W + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("o--------oo--------o\n");
echo("|        ||        |\n");
echo("| o------o| o------o\n");
echo("| |       | |\n");
echo("| |       | |   o--o\n");
echo("| |       | |   |  |\n");
echo("| |       | |   |  |\n");
echo("| o------o| o---o  |\n");
echo("|         o        |\n");
echo("o------------------o\n");