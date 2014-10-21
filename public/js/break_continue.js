var random = Math.floor((Math.random()*50)+1);
console.log('Random number is ' + random);

for (var i = 1; i < 50; i++) {

    if (i == random) {
    	console.log('time to skip number ' + random);

    }

    else if (i % 2 == 0 ){
    	continue;
    }
    else{
    	console.log('this is a odd number  ' + i);
    }

}