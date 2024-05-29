<?php
fscanf(STDIN, "%d", $cyborgCount);
for ($i = 0; $i < $cyborgCount; $i++)
{
    fscanf(STDIN, "%s", $cyborgName);
}
fscanf(STDIN, "%d", $mayhemReportCount);
for ($i = 0; $i < $mayhemReportCount; $i++)
{
    $mayhemReport = stream_get_line(STDIN, 100 + 1, "\n");
}
fscanf(STDIN, "%d", $cyborgReportCount);
for ($i = 0; $i < $cyborgReportCount; $i++)
{
    $cyborgReport = stream_get_line(STDIN, 100 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("CYBORG\n");