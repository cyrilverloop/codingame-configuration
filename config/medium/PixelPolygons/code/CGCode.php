<?php
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    $line = stream_get_line(STDIN, $N + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("number_of_sides\n");