var inputs = readline().split(' ');
const pieceSize = parseInt(inputs[0]); // size of a piece (its width and its height)
const nPieces = parseInt(inputs[1]); // number of pieces (= nColumns * nRows)
var inputs = readline().split(' ');
const nColumns = parseInt(inputs[0]); // number of pieces in a row of the picture
const nRows = parseInt(inputs[1]); // number of pieces in a column of the picture
var inputs = readline().split(' ');
const pictureWidth = parseInt(inputs[0]); // number of characters in a row of the picture (= 1 + nColumns * (pieceSize - 1))
const pictureHeight = parseInt(inputs[1]); // number of characters in a column of the picture (= 1 + nRows * (pieceSize - 1))
for (let i = 0; i < nPieces; i++) {
    for (let j = 0; j < pieceSize; j++) {
        const row = readline();
    }
}
for (let i = 0; i < pictureHeight; i++) {

    // Write an answer using console.log()
    // To debug: console.error('Debug messages...');

    console.log('row of the picture composed of pictureWidth characters');
}