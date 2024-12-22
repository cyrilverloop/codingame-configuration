<?php
fscanf(STDIN, "%d %d", $numRecipe, $numIngredients);
for ($i = 0; $i < $numRecipe; $i++)
{
    $line = stream_get_line(STDIN, 500 + 1, "\n");
}
for ($i = 0; $i < $numIngredients; $i++)
{
    $line = stream_get_line(STDIN, 500 + 1, "\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("limiting_ingredient\n");
echo("numCooking\n");
echo("ingredient+quantity\n");