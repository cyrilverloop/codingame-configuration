<?php
fscanf(STDIN, "%d %d %d %d %d %d", $inputs, $outputs, $hiddenLayers, $testInputs, $trainingExamples, $trainingIterations);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $hiddenLayers; $i++)
{
    $nodes = intval($inputs[$i]);
}
for ($i = 0; $i < $testInputs; $i++)
{
    $testInput = stream_get_line(STDIN, 16 + 1, "\n");
}
for ($i = 0; $i < $trainingExamples; $i++)
{
    fscanf(STDIN, "%s %s", $trainingInputs, $expectedOutputs);
}
for ($i = 0; $i < $testInputs; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("answer\n");
}