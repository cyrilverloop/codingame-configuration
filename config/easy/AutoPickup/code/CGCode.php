<?php
fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%s", $packet);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("001[length][item id]\n");