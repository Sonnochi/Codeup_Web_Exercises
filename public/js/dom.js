

        // get the main header element by id
        var mainHeader = function(){
            mainHeader = document.getElementById("main-header");
            mainHeader.innerHTML = "JavaScript is Cool";
        };
        console.log(mainHeader); //prints <h1 id=mainHeader...>
        console.log(mainHeader.innerHTML); //prints JavaScript is Cool

        // todo: get the sub header element by id
        var subHeader = function(){
            subHeader = document.getElementById("sub-header");
            subHeader.style['color'] = 'blue'; //changes subHeader text to blue
        }

        console.log(subHeader); 
        console.log(subHeader.style['color']);

        // todo: get all list items
        var listItems = document.getElementsByTagName('li');
        console.log(listItems);

        // accessing all list items
        for (var i = 0; i < listItems.length; i++) {
            var dbId = listItems[i].attributes['data-dbid'].value;

        // excludes even numbers
            if (dbId % 2 == 0) {
                console.log(dbId);
            }
        // set text color on every other list item to grey
            else {
                listItems[i].style['color'] = 'gray';
            }
        };

        // todo: set text color of li with dbid = 1 to blue
        listItems[0].style['color'] = 'blue';

        // todo: get all elements with class name sub-paragraph
        var subParagraphs = document.getElementsByClassName("sub-paragraph");
        console.log(subParagraphs); //prints subParagraph array

        // todo: change the text in the first sub paragraph to "Mission Accomplished!"
        subParagraphs[0].innerHTML = "Mission Accomplished!";

        console.log(subParagraphs[0].innerHTML); //prints line 49

document.getElementById('btn1').addEventListener('click', mainHeader, false);
// document.getElementById('btn2').addEventListener('click', subHeader, false);
// document.getElementById('btn3').addEventListener('click', listItems, false);
// document.getElementById('btn4').addEventListener('click', subParagraphs, false);

