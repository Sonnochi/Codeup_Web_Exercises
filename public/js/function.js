var myNameIs = 'Josee';
// todo:
// Create a function called 'sayHello' that takes a parameter 'name'.
// When called, the function should log a message that says hello from the passed in name.

// todo: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.
function sayHello(name){

	console.log(name + ' says Hello!');

}

sayHello(myNameIs);




var random = Math.floor((Math.random()*100)+1);
console.log(random);

function isOdd(number){
	return (number % 2 != 0) ? 'is odd' : 'not odd';
}

console.log(isOdd(random));
// todo:
// Create a function called 'isOdd' that takes a number as a parameter.
// The function should use the ternary operator to log a message.
// The log should tell the number passed in and whether it is odd or not.
// todo: Call the function 'isOdd' passing the variable 'random' as a parameter.