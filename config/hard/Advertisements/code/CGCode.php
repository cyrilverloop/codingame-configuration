<?php
fscanf(STDIN, "%d", $na);
for ($i = 0; $i < $na; $i++)
{
    $advertisement = stream_get_line(STDIN, 50 + 1, "\n");
}
fscanf(STDIN, "%d", $ni);
for ($i = 0; $i < $ni; $i++)
{
    fscanf(STDIN, "%s %s %s %f", $product, $group, $brand, $price);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");