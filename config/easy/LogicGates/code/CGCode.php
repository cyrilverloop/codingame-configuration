<?php
fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%d", $m);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%s %s", $inputName, $inputSignal);
}
for ($i = 0; $i < $m; $i++)
{
    fscanf(STDIN, "%s %s %s %s", $outputName, $type, $inputName1, $inputName2);
}
for ($i = 0; $i < $m; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("output name and signal\n");
}