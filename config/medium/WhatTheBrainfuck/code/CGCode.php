<?php
fscanf(STDIN, "%d %d %d", $L, $S, $N);
for ($i = 0; $i < $L; $i++)
{
    $r = stream_get_line(STDIN, 1024 + 1, "\n");
}
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d", $c);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");