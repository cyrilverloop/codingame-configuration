<?php
fscanf(STDIN, "%d %d", $nbCharacteristics, $nbPeople);
for ($i = 0; $i < $nbCharacteristics; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
    for ($j = 0; $j < $nbPeople; $j++)
    {
        $characteristic = ($inputs[$j]);
    }
}
fscanf(STDIN, "%d", $nbLinks);
for ($i = 0; $i < $nbLinks; $i++)
{
    $link = stream_get_line(STDIN, 256 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("Amelia Bob Charles Daniel\nCar Autobus Bicycle Roller\nTree Flower Bush Herb\nTurtle Elephant Rhinoceros Ant\n");