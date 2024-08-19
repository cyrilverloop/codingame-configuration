<?php
$ciphertext = stream_get_line(STDIN, 2000 + 1, "\n");
fscanf(STDIN, "%s", $word);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("key\n");
echo("plaintext\n");