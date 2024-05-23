<?php
fscanf($stdin, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    $room = stream_get_line($stdin, 256 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");