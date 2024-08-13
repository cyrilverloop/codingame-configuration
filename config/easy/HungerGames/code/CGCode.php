<?php
fscanf(STDIN, "%d", $tributes);
for ($i = 0; $i < $tributes; $i++)
{
    $playerName = stream_get_line(STDIN, 100 + 1, "\n");
}
fscanf(STDIN, "%d", $turns);
for ($i = 0; $i < $turns; $i++)
{
    $info = stream_get_line(STDIN, 100 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Name:\n");
echo("Killed:\n");
echo("Killer:\n");