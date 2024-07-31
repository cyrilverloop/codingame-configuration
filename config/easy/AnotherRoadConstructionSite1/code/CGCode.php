<?php
// $roadLength: The total kilometers of the route.
fscanf(STDIN, "%d", $roadLength);
// $zoneQuantity: The number of road construction sites.
fscanf(STDIN, "%d", $zoneQuantity);
for ($i = 0; $i < $zoneQuantity; $i++)
{
    // $zoneKm: The kilometer in which the road construction site begins.
    // $zoneSpeed: The speed limit of the road construction site.
    fscanf(STDIN, "%d %d", $zoneKm, $zoneSpeed);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)


// Difference between theoretical time and travel time
echo("0.00\n");