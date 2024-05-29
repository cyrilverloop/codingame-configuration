<?php
fscanf(STDIN, "%d", $C);
for ($i = 0; $i < $C; $i++)
{
    $WIRING = stream_get_line(STDIN, 1024 + 1, "\n");
}
fscanf(STDIN, "%d", $A);
for ($i = 0; $i < $A; $i++)
{
    $SWITCH = stream_get_line(STDIN, 20 + 1, "\n");
}
for ($i = 0; $i < $C; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("ANSWER\n");
}