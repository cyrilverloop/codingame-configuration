<?php
fscanf(STDIN, "%d %d", $L, $H);
for ($i = 0; $i < $H; $i++) {
    fscanf(STDIN, "%s", $numeral);
}
fscanf(STDIN, "%d", $S1);
for ($i = 0; $i < $S1; $i++) {
    fscanf(STDIN, "%s", $num1Line);
}
fscanf(STDIN, "%d", $S2);
for ($i = 0; $i < $S2; $i++) {
    fscanf(STDIN, "%s", $num2Line);
}
fscanf(STDIN, "%s", $operation);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("result\n");