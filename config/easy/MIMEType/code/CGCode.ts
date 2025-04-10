const N: number = parseInt(readline()); // Number of elements which make up the association table.
const Q: number = parseInt(readline()); // Number Q of file names to be analyzed.
for (let i = 0; i < N; i++) {
    var inputs: string[] = readline().split(' ');
    const EXT: string = inputs[0]; // file extension
    const MT: string = inputs[1]; // MIME type.
}
for (let i = 0; i < Q; i++) {
    const FNAME: string = readline(); // One file name per line.
}

// Write an answer using console.log()
// To debug: console.error('Debug messages...');


// For each of the Q filenames, display on a line the corresponding MIME type. If there is no corresponding type, then display UNKNOWN.
console.log('UNKNOWN');