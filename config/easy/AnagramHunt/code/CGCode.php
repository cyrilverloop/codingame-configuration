<?php
fscanf(STDIN, "%s", $mode);
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%s %s", $name, $hand);
}
fscanf(STDIN, "%d", $d);
for ($i = 0; $i < $d; $i++)
{
    fscanf(STDIN, "%s", $dict);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("winner_name winner_word\n");