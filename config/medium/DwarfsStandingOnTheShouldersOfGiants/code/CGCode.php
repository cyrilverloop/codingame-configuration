<?php
// $n: the number of relationships of influence
fscanf($stdin, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    // $x: a relationship of influence between two people (x influences y)
    fscanf($stdin, "%d %d", $x, $y);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

// The number of people involved in the longest succession of influences
echo("2\n");