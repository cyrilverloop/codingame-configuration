<?php
fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%s", $START);
for ($i = 0; $i < $N; $i++)
{
    $RULE = stream_get_line(STDIN, 100 + 1, "\n");
}
fscanf(STDIN, "%d", $T);
for ($i = 0; $i < $T; $i++)
{
    fscanf(STDIN, "%s", $WORD);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("true\n");