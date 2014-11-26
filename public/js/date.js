// todo:
// Create an array of months for printing dates without Moment.js.
var months = ['January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

// todo:
// Create the date corresponding to your birthday using the JavaScript Date object.

var jsBirthday = new Date(1992, 3, 6);
var numMonth = jsBirthday.getMonth();
var nameMonth = months[numMonth];



// todo:
// Log your birthday in the format: January 1, 2014 using the JavaScript Date object.
// See link below for methods needed:
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date#Getter
console.log('Here is my birthday using vanilla js: ');

// create the date corresponding to your birthday using Moment.js.
//var momentBirthday

// todo:
// Log your birthday in the format: January 1, 2014 using Moment.js.
console.log('Here is my birthday using Moment.js: ');