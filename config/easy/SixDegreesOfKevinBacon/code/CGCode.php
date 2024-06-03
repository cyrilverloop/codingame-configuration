<?php
$actorName = stream_get_line(STDIN, 30 + 1, "\n");
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    $movieCast = stream_get_line(STDIN, 200 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("N degrees to Kevin Bacon\n");