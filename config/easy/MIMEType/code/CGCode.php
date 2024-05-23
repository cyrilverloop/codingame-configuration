<?php
// $N: Number of elements which make up the association table.
fscanf($stdin, "%d", $N);
// $Q: Number Q of file names to be analyzed.
fscanf($stdin, "%d", $Q);
for ($i = 0; $i < $N; $i++) {
    // $EXT: file extension
    // $MT: MIME type.
    fscanf($stdin, "%s %s", $EXT, $MT);
}
for ($i = 0; $i < $Q; $i++) {
    $FNAME = stream_get_line($stdin, 256 + 1, "\n");// One file name per line.
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)


// For each of the Q filenames, display on a line the corresponding MIME type. If there is no corresponding type, then display UNKNOWN.
echo("UNKNOWN\n");