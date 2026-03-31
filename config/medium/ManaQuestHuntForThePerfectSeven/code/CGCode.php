<?php
fscanf(STDIN, "%d", $c);
for ($i = 0; $i < $c; $i++)
{
    fscanf(STDIN, "%s %d", $category, $count);
}
fscanf(STDIN, "%d", $q);
for ($i = 0; $i < $q; $i++)
{
    fscanf(STDIN, "%s", $pattern);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("0.0000\n");