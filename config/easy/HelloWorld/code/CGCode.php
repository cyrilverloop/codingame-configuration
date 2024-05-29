<?php
// $n: number of capitals
fscanf(STDIN, "%d", $n);
// $m: number of geolocations for which to find the closest capital
fscanf(STDIN, "%d", $m);
for ($i = 0; $i < $n; $i++)
{
    $capitalNameGeoloc = stream_get_line(STDIN, 48 + 1, "\n");
}
for ($i = 0; $i < $n; $i++)
{
    $message = stream_get_line(STDIN, 128 + 1, "\n");
}
for ($i = 0; $i < $m; $i++)
{
    $travelGeoloc = stream_get_line(STDIN, 16 + 1, "\n");
}
for ($i = 0; $i < $m; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("Hello, World!\n");
}