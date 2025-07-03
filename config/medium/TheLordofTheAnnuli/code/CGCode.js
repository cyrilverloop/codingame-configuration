var inputs = readline().split(' ');
const width = parseInt(inputs[0]);
const height = parseInt(inputs[1]);
const cx = parseFloat(inputs[2]);
const cy = parseFloat(inputs[3]);
const ro = parseFloat(inputs[4]);
const ri = parseFloat(inputs[5]);
const samples = parseInt(inputs[6]);

// Write an answer using console.log()
// To debug: console.error('Debug messages...');

console.log('ASCII art, including frame');