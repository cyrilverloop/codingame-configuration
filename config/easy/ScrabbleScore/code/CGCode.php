<?php
// $nbTiles: Number of tiles in the tile set
fscanf(STDIN, "%d", $nbTiles);
for ($i = 0; $i < $nbTiles; $i++)
{
    fscanf(STDIN, "%s %d", $character, $score);
}
fscanf(STDIN, "%d %d", $width, $height);
for ($i = 0; $i < $height; $i++)
{
    $emptyBoardRow = stream_get_line(STDIN, 15 + 1, "\n");// Empty board with special cells
}
for ($i = 0; $i < $height; $i++)
{
    $previousWordBoardRow = stream_get_line(STDIN, 15 + 1, "\n");// Words already played
}
for ($i = 0; $i < $height; $i++)
{
    $playedWordBoardRow = stream_get_line(STDIN, 15 + 1, "\n");// Words after you play
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("OF 5\n");
echo("Total 5\n");