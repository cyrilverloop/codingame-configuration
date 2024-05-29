<?php
fscanf(STDIN, "%d", $numberSnails);
for ($i = 0; $i < $numberSnails; $i++)
{
    fscanf(STDIN, "%d", $speedSnail);
}
fscanf(STDIN, "%d", $mapHeight);
fscanf(STDIN, "%d", $mapWidth);
for ($i = 0; $i < $mapHeight; $i++)
{
    $ROW = stream_get_line(STDIN, 1024 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("winner is number\n");