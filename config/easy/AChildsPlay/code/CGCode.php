<?php
fscanf($stdin, "%d %d", $w, $h);
fscanf($stdin, "%d", $n);
for ($i = 0; $i < $h; $i++)
{
    $line = stream_get_line($stdin, 500 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");