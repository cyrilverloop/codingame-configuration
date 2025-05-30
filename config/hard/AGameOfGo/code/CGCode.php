<?php
// $S: the size of the board
fscanf(STDIN, "%d", $S);
// $M: the number of moves to be made
fscanf(STDIN, "%d", $M);
for ($i = 0; $i < $S; $i++)
{
    $row = stream_get_line(STDIN, $S + 1, "\n");// a single row in the input board
}
for ($i = 0; $i < $M; $i++)
{
    $move = stream_get_line(STDIN, 7 + 1, "\n");// a strng representation of a move
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("NOT_VALID | <<the_board_after_the_moves>>\n");