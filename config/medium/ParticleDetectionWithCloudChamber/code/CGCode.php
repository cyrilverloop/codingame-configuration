<?php
// $w: width of ASCII-art picture (one meter per column)
fscanf(STDIN, "%d", $w);
// $h: height of ASCII-art picture (one meter per line)
fscanf(STDIN, "%d", $h);
// $B: strengh of magnetic field (tesla)
fscanf(STDIN, "%f", $B);
// $V: speed of the particle (speed-of-light unit)
fscanf(STDIN, "%f", $V);
for ($i = 0; $i < $h; $i++)
{
    $line = stream_get_line(STDIN, 128 + 1, "\n");// lines of ASCII-art picture
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)


// "<symbol> <radius>" if charged particle
// "<symbol> inf" if neutral particle
// "I just won the Nobel prize in physics !" if unknown particle
echo("symbol radius\n");