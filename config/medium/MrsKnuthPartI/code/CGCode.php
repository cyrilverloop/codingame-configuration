<?php
$teacherAvailability = stream_get_line(STDIN, 200 + 1, "\n");
fscanf(STDIN, "%d", $numStudents);
for ($i = 0; $i < $numStudents; $i++)
{
    $studentData = stream_get_line(STDIN, 1000 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("schedule\n");