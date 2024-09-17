<?php
fscanf(STDIN, "%d", $numNodes);
fscanf(STDIN, "%d", $virusLocation);
fscanf(STDIN, "%d", $numLinks);
for ($i = 0; $i < $numLinks; $i++)
{
    $link = stream_get_line(STDIN, 1024 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");