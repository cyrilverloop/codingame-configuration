<?php
fscanf(STDIN, "%d %d", $g, $e);
for ($i = 0; $i < $g; $i++)
{
    $group = stream_get_line(STDIN, 1024 + 1, "\n");
}
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $e; $i++)
{
    $event = intval($inputs[$i]);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");