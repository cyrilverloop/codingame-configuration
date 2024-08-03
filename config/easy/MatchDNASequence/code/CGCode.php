<?php
fscanf(STDIN, "%d", $delta);
$gene = stream_get_line(STDIN, 42 + 1, "\n");
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    $chr = stream_get_line(STDIN, 128 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("line index delta\n");