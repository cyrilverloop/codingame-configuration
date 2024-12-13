<?php
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < 26; $i++)
{
    $wireR1 = ($inputs[$i]);
}
$trigR1 = stream_get_line(STDIN, 1 + 1, "\n");
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < 26; $i++)
{
    $wireR2 = ($inputs[$i]);
}
$trigR2 = stream_get_line(STDIN, 1 + 1, "\n");
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < 26; $i++)
{
    $wireR3 = ($inputs[$i]);
}
$trigR3 = stream_get_line(STDIN, 1 + 1, "\n");
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < 26; $i++)
{
    $wireRef = ($inputs[$i]);
}
fscanf(STDIN, "%s %s %s", $r1, $r2, $r3);
$message = stream_get_line(STDIN, 1000 + 1, "\n");

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");