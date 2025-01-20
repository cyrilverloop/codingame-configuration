<?php
fscanf(STDIN, "%d", $nColors);
fscanf(STDIN, "%d", $nColumns);
fscanf(STDIN, "%d", $nLines);
for ($i = 0; $i < $nLines; $i++)
{
    fscanf(STDIN, "%s %d %d", $colors, $nBlackClues, $nWhiteClues);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("021\n");