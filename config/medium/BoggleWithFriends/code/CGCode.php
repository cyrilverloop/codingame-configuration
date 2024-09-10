<?php
for ($i = 0; $i < 4; $i++)
{
    $gridLine = stream_get_line(STDIN, 7 + 1, "\n");
}
fscanf(STDIN, "%d", $numOfFriendsPlaying);
for ($i = 0; $i < $numOfFriendsPlaying; $i++)
{
    $aFriendsNotePad = stream_get_line(STDIN, 2000 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("winner and all the details\n");