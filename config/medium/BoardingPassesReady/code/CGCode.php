<?php
fscanf(STDIN, "%d", $h);
fscanf(STDIN, "%d", $w);
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    $passenger = stream_get_line(STDIN, 40 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Now boarding: Tinky Winky,Dipsy,La La,Po\n");