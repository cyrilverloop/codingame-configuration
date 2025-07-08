var inputs: string[] = readline().split(' ');
const width: number = parseInt(inputs[0]);
const height: number = parseInt(inputs[1]);
const players: number = parseInt(readline());
const doors: number = parseInt(readline());
const turns: number = parseInt(readline());
for (let i = 0; i < players; i++) {
    var inputs: string[] = readline().split(' ');
    const rX: number = parseInt(inputs[0]);
    const rY: number = parseInt(inputs[1]);
}
for (let i = 0; i < doors; i++) {
    var inputs: string[] = readline().split(' ');
    const coord: number = parseInt(inputs[0]);
    const wall: string = inputs[1];
}
for (let i = 0; i < turns; i++) {
    var inputs: string[] = readline().split(' ');
    const tX: number = parseInt(inputs[0]);
    const tY: number = parseInt(inputs[1]);
    const direction: string = inputs[2];
}
for (let i = 0; i < players; i++) {

    // Write an answer using console.log()
    // To debug: console.error('Debug messages...');

    console.log('answer');
}