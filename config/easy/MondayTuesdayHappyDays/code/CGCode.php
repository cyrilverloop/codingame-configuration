<?php
fscanf(STDIN, "%d", $leapYear);
fscanf(STDIN, "%s %s %d", $sourceDayOfWeek, $sourceMonth, $sourceDayOfMonth);
fscanf(STDIN, "%s %d", $targetMonth, $targetDayOfMonth);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("day of week\n");