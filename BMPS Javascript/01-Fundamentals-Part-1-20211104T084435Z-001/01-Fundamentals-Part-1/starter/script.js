//console.log(20 + 33 + 99);

//--------- coding Challange -----------

// const marksWeight = 78;
// const marksHeight = 1.69;
// const johnWeight = 92;
// const johnHeight = 1.95;

// let marksBmp = marksWeight / (marksHeight ** 2);
// let johnBmp = johnWeight / (johnHeight ** 2);

// console.log(marksBmp,johnBmp);

// let marksIsGraterThanJohn = marksBmp > johnBmp;
// console.log(marksIsGraterThanJohn);

// const marks2Weight = 95;
// const marks2Height = 1.88;
// const john2Weight = 85;
// const john2Height = 1.76;

// let marks2Bmp = marks2Weight / (marks2Height ** 2);
// let john2Bmp = john2Weight / (john2Height ** 2);
// console.log(marks2Bmp, john2Bmp);
// let marks2GreaterThanJohn2 = marks2Bmp > john2Bmp;
// console.log(marks2GreaterThanJohn2);

//---------------------------------------------------

//--------------- Modern Javascript ------------

// const firstName = 'BMPS';
// const now = 2021;
// const age = 2000;
// const job = 'Javascript Developer';

// const bmps = `I'm ${firstName} a ${now - age} years old ${job}`;
// console.log(bmps);

// console.log('I\'m a BMPS \n\
// happy programmer');

// console.log(`I'm a BMPS
// Happy Programmer`);

//----------------------------------------------------

//------------------ type conversion ---------------

// const birthYear = '2000';
// console.log(Number(birthYear) + 18);

// console.log(Number('BMPS'));
// console.log(typeof NaN);
// console.log(String('23'));

// console.log('11'+1);
// console.log('11'-'1');
// console.log('11'*'2');
// let n = '1' + 1;
// n = n - 1;
// console.log(n);

// let num = 0;
// if (num) {
//     console.log('True');
// }
// else{
//     console.log('False');
// }

//--------------------------------------------------

//-------------------- Switch --------------------

// let day = 'Friday';
// switch(day) {
//     case 'Monday':
//         console.log('Set a plan');
//         break;
//     case 'Tuesday':
//     case 'Wendesday':
//         console.log('Good');
//         break;
//     case 'Thusday':
//     case 'Friday':
//         console.log('Combine Two');
//         break;
// }

//------------------------------------------------

//----------------- statement and Expression ------

// if (2 > 8) {
//     let num = 'Good';
// }

// console.log(`I am ${1900 - 122} years Old`);

//---------------------------------------------

//------------------- Ternary ---------------------

// let age = 21;
// console.log(`I like to drink ${age > 18 ? 'soft drink' : 'water'}`);

//-------------------------------------------------

//------------------ Coding Challange ----------------

const bill = 275;
const tip1 = bill >= 50 && bill <= 300 ? bill*0.15 : bill*0.20;

const bill2 = 40;
const tip2 = bill2 >= 50 && bill2 <= 300 ? bill2*0.15 : bill2*0.20;

const bill3 = 430;
const tip3 = bill3 >= 50 && bill3 <= 300 ? bill3*0.15 : bill3*0.20;

console.log(`Bill1 is ${bill} Tip1 is ${tip1} Total value is ${bill + tip1}
Bill2 is ${bill2} Tip2 is ${tip2} Total value2 is ${bill2 + tip2}
Bill3 is ${bill3} Tip3 is ${tip3} Total value is ${bill3 + tip3}
`);
