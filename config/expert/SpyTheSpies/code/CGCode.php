<?php
fscanf(STDIN, "%s %s %s %s %s %s", $enemy1, $enemy2, $enemy3, $enemy4, $enemy5, $enemy6);
for ($i = 0; $i < 15; $i++)
{
    $suspect = stream_get_line(STDIN, 100 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");