<?php
fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d", $C);
for ($i = 0; $i < $N; $i++)
{
    $numbers = stream_get_line(STDIN, 1024 + 1, "\n");
}
for ($i = 0; $i < $N; $i++)
{
    $clicks = stream_get_line(STDIN, 1024 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("0 0 0 0\n");