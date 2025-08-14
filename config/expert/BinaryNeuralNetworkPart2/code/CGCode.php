<?php
fscanf(STDIN, "%d %d", $tests, $trainingSets);
for ($i = 0; $i < $tests; $i++)
{
    fscanf(STDIN, "%s", $testInputs);
}
for ($i = 0; $i < $trainingSets; $i++)
{
    fscanf(STDIN, "%s %s", $trainingInputs, $expectedOutputs);
}
for ($i = 0; $i < $tests; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("answer\n");
}