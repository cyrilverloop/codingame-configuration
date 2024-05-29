<?php
fscanf(STDIN, "%s", $startPoint);
fscanf(STDIN, "%s", $endPoint);
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    $stopName = stream_get_line(STDIN, 256 + 1, "\n");
}
fscanf(STDIN, "%d", $M);
for ($i = 0; $i < $M; $i++)
{
    $route = stream_get_line(STDIN, 256 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("IMPOSSIBLE\n");