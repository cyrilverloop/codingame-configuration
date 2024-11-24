<?php
fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d", $L);
for ($i = 0; $i < $N; $i++)
{
    $sentence = stream_get_line(STDIN, 1024 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("liar1 liar2 liar3...\n");