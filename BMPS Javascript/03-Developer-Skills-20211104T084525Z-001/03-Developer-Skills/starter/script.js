// Remember, we're gonna use strict mode in all scripts now!
"use strict";

// const temperature = [3, -2, -6, -1, 'error', 9, 13, 17, 15, 14, 9, 5];
// const calcAmptitute = function(temps){

//     let max = temps[0];
//     let min = temps[0];
//     for(let i = 0; i < temps.length; i++) {

//         const curtemp = temps[i];
//         if(typeof curtemp !== "number") continue;
//         if(curtemp > max) max = curtemp;
//         if(curtemp < min) min = curtemp;
//     }
//     return max - min;
// }

// const amptitue = calcAmptitute(temperature);
// console.log(amptitue);

// const temperature = [3, -2, -6, -1, 'error', 9, 13, 17, 15, 14, 9, 5];
// const calcAmptitute = function(t1,t2){
//     const temps = t1.concat(t2);            //mergs two arrays
//     let max = temps[0];
//     let min = temps[0];
//     for(let i = 0; i < temps.length; i++) {

//         const curtemp = temps[i];
//         if(typeof curtemp !== "number") continue;
//         if(curtemp > max) max = curtemp;
//         if(curtemp < min) min = curtemp;
//     }
//     return max - min;
// }

// const amptitue = calcAmptitute([3,4,6],[6,7,8]);
// console.log(amptitue);

const measureKelvin = function() {
    const measurement = {
        type : "temp",
        unit : "celsius",
        value : Number(prompt()),
    };

    const kelvin = measurement.value + 273;
    return kelvin;
}

console.log(measureKelvin());