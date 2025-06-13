<?php
fscanf(STDIN, "%d %d", $W1, $H1);
for ($i = 0; $i < $H1; $i++)
{
    $ROW = stream_get_line(STDIN, 100 + 1, "\n");
}
fscanf(STDIN, "%d %d", $W2, $H2);
for ($i = 0; $i < $H2; $i++)
{
    $ROW = stream_get_line(STDIN, 100 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("+----------+\n");
echo("|          |\n");
echo("|  *       |\n");
echo("| \|    *  |\n");
echo("|  |/   |/ |\n");
echo("|  |    |  |\n");
echo("| \|    |  |\n");
echo("+----------+\n");