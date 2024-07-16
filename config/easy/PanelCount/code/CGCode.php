<?php
fscanf(STDIN, "%d", $P);
for ($i = 0; $i < $P; $i++)
{
    $property = stream_get_line(STDIN, 256 + 1, "\n");
}
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    $person = stream_get_line(STDIN, 2048 + 1, "\n");
}
fscanf(STDIN, "%d", $F);
for ($i = 0; $i < $F; $i++)
{
    $formula = stream_get_line(STDIN, 1024 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");