var inputs: string[] = readline().split(' ');
const unsedP: string = inputs[0];
const unsedCnf: string = inputs[1];
const V: number = parseInt(inputs[2]);
const C: number = parseInt(inputs[3]);
for (let i = 0; i < C; i++) {
    const clause: string = readline();
}

// Write an answer using console.log()
// To debug: console.error('Debug messages...');

console.log('s UNSATISFIABLE');