<?php
fscanf(STDIN, "%s", $rookPosition);
fscanf(STDIN, "%d", $nbPieces);
for ($i = 0; $i < $nbPieces; $i++)
{
    fscanf(STDIN, "%d %s", $colour, $onePiece);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("ANSWER\n");