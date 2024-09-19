<?php
$ciphertext = stream_get_line(STDIN, 1024 + 1, "\n");
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%s", $word);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("plaintext\n");
for ($i = 0; $i < 26; $i++)
{

    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo("'Na' or '{LETTER}' -> '{LETTER}'\n");
}