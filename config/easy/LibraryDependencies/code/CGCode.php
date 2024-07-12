<?php
fscanf(STDIN, "%d", $nImp);
for ($i = 0; $i < $nImp; $i++)
{
    $import = stream_get_line(STDIN, 1024 + 1, "\n");
}
fscanf(STDIN, "%d", $nDep);
for ($i = 0; $i < $nDep; $i++)
{
    $dependency = stream_get_line(STDIN, 1024 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("answer\n");