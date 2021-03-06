// todo:
// Create an array holding the names of the planets of our solar system (in order, starting closest to the sun).
var planets = ['Mercury', 'Venus', 'Earth', 'Mars', 'Jupiter', 'Saturn', 'Uranus', 'Neptune'];

// function for logging the planets array
function logPlanets() {
    console.log('Here is the list of planets:');
    console.log(planets);
}

console.log('Adding "The Sun" to the beginning of the planets array.');
// todo: Do what the log statement above says you will do.
planets.unshift('The Sun');
logPlanets();


console.log('Adding "Pluto" to the end of the planets array.');
// todo: Do what the log statement above says you will do.
planets.push('Pluto');
logPlanets();

console.log('Removing "The Sun" from the beginning of the planets array.');
// todo: Do what the log statement above says you will do.
var removeItem = planets.shift();
logPlanets();

console.log('Removing "Pluto" from the end of the planets array.');
// todo: Do what the log statement above says you will do.
removeItem = planets.pop();
logPlanets();


console.log('Finding and logging the index of "Earth" in the planets array.');
// todo: Do what the log statement above says you will do.
var index = planets.indexOf('Earth');
console.log(index);


console.log('Using splice to remove the planet after Earth.');
// todo: Do what the log statement above says you will do.
var remove = planets.splice(++index,1);
logPlanets();
console.log('Using splice to add back the planet after Earth.');

// todo: Do what the log statement above says you will do.
remove = planets.splice(index++, 0, 'Mars');
logPlanets();

console.log('Reversing the order of the planets array.');
// todo: Do what the log statement above says you will do.

logPlanets();

console.log('Sorting the planets array.');
// todo: Do what the log statement above says you will do.
logPlanets();