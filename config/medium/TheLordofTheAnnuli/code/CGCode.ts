var inputs: string[] = readline().split(' ');
const width: number = parseInt(inputs[0]);
const height: number = parseInt(inputs[1]);
const cx: number = parseFloat(inputs[2]);
const cy: number = parseFloat(inputs[3]);
const ro: number = parseFloat(inputs[4]);
const ri: number = parseFloat(inputs[5]);
const samples: number = parseInt(inputs[6]);

// Write an answer using console.log()
// To debug: console.error('Debug messages...');

console.log('ASCII art, including frame');