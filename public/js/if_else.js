var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'violet'; // todo, change this to your favorite color from the list

if (color == 'red') {
	console.log('Red is the color of an apple.');
} else if (color == 'orange'){
	console.log('Orange is the color of an ... orange?');
} else if (color == 'yellow'){
	console.log('Yellow is the color of the sun.');
} else if (color == 'green'){
	console.log('Green is the color of grass.');
} else if (color == 'blue'){
	console.log('Blue is the color of the sky.');
} else {
	console.log('I do not know anything by that color.');
}

var fav = (favorite == color) ? "violet is my favorite color" : "this is not my favorite color.";
console.log(fav);