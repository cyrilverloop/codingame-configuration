<?php
fscanf(STDIN, "%d %d", $W, $H);
fscanf(STDIN, "%d %d", $x, $y);
for ($i = 0; $i < $H; $i++)
{
    // $line: The line of w arrows represented by ascii char ^v<>
    fscanf(STDIN, "%s", $line);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("0\n");