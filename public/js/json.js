// todo:
// Create an array of objects that represent books.
// Each book should have a title and an author.
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array
// var books = [todo];
var books = [ 	{'title': 'Tokyo Ghoul', 'author':
											{'First': 'Ishida', 
											'Last': 'Sui'
										    }
				},
				{'title': 'Karakuri Douji Ultimo', 'author': 
													{'First': 'Stan',
													'Last': 'Lee'
											}
				},
				{'title': 'Pokemon Adventures', 'author': 
													{'Frist':'Kusaka', 
													'Last': 'Hidenori'
											}
				},
				{'title': 'DOLL: IC in a Doll', 'author':
													{'Frist': 'Mihara',
													'Last': 'Mitsukazu'}
				},
				{'title': 'Rozen Maiden','author': {'Frist': 'Peach-pit'}},
			];

// log out the books array
console.log(books);

// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here

  books.forEach (function (element, index, array) {
+    console.log("Book # " + index + " is titled: " + "\"" + element.title + "\"" + " and is authored by " + element.author.First + " " + element.author.Last + ".");
     console.log("--------------------------------------------------------------------------------------");
 	});
// end loop here
