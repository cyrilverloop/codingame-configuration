<?php
fscanf(STDIN, "%d %d %d", $trainCars, $numTickets, $numRoutes);
fscanf(STDIN, "%d %d %d %d %d %d %d %d %d", $red, $yellow, $green, $blue, $white, $black, $orange, $pink, $engine);
for ($i = 0; $i < $numTickets; $i++)
{
    fscanf(STDIN, "%d %s %s", $points, $cityA, $cityB);
}
for ($i = 0; $i < $numRoutes; $i++)
{
    fscanf(STDIN, "%d %d %s %s %s", $length, $requiredEngines, $color, $cityA, $cityB);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("points\n");