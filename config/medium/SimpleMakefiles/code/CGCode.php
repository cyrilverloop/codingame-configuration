<?php
fscanf(STDIN, "%d", $nFiles);
for ($i = 0; $i < $nFiles; $i++)
{
    fscanf(STDIN, "%s %d", $preexistingFile, $fileTime);
}
fscanf(STDIN, "%d", $nGoalTargets);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $nGoalTargets; $i++)
{
    $goalTarget = ($inputs[$i]);
}
fscanf(STDIN, "%d", $nLines);
for ($i = 0; $i < $nLines; $i++)
{
    $makefileLine = stream_get_line(STDIN, 100 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("[Build complete]\n");