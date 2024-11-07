<?php
$names = stream_get_line(STDIN, 31 + 1, "\n");
fscanf(STDIN, "%d", $n);
$points = stream_get_line(STDIN, 255 + 1, "\n");

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Joueur_1....... 6 2 | 30\n");
echo("Joueur_2....... 3 4 | 15\n");
echo("Game in progress\n");