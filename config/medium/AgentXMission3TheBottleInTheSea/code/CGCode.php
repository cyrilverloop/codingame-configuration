<?php
$ciphertext = stream_get_line(STDIN, 10000 + 1, "\n");
fscanf(STDIN, "%d", $keylength);
fscanf(STDIN, "%s", $word);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("key\n");
echo("first 900 char of plaintext\n");