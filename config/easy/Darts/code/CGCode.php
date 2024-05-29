<?php
fscanf(STDIN, "%d", $SIZE);
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    $name = stream_get_line(STDIN, 100 + 1, "\n");
}
fscanf(STDIN, "%d", $T);
for ($i = 0; $i < $T; $i++)
{
    fscanf(STDIN, "%s %d %d", $throwName, $throwX, $throwY);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");