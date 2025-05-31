<?php
fscanf(STDIN, "%d %d", $N, $M);
for ($i = 0; $i < $M; $i++)
{
    fscanf(STDIN, "%d %d %d", $house1, $house2, $cost);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("number of connections and total cost\n");
echo("k lines: house1 house2\n");