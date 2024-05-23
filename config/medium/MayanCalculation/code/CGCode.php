<?php
fscanf($stdin, "%d %d", $L, $H);
for ($i = 0; $i < $H; $i++) {
    fscanf($stdin, "%s", $numeral);
}
fscanf($stdin, "%d", $S1);
for ($i = 0; $i < $S1; $i++) {
    fscanf($stdin, "%s", $num1Line);
}
fscanf($stdin, "%d", $S2);
for ($i = 0; $i < $S2; $i++) {
    fscanf($stdin, "%s", $num2Line);
}
fscanf($stdin, "%s", $operation);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("result\n");