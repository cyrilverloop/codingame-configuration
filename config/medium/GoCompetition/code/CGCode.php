<?php
fscanf(STDIN, "%d", $L);
for ($i = 0; $i < $L; $i++)
{
    $ROW = stream_get_line(STDIN, 1024 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("BLACK : score\n");
echo("WHITE : score\n");
echo("BLACK/WHITE WINS\n");