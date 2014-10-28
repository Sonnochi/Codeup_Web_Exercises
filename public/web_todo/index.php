<?php
 
// Define a function which will open your default filename, and return an array of items.

/* This function accepts an array, saves it to file, and returns an array of list items. */ 
function openFile($filename = 'list.txt'){

	//If the filesize is greater that zero, use it.
	// Otherwise set a default filesize of 100 bytes.
	if (file_exists($filename) && filesize($filename) > 0) {
		$handle = fopen($filename, 'r');
		$contents = trim(fread($handle, filesize($filename)));
		$contentArray = explode("\n", $contents);
		$filesize = filesize($filename);
		fclose($handle);
	}
	else{
		$contentArray = [];
	}
	

	return $contentArray;
}
 
// Define a function which will save your list to file.

/* This function accepts an array, saves it to file, and returns nothing. */
function saveFile($array, $filename = 'list.txt'){

	$handle = fopen($filename, 'w');
	// Implode the entire array into one string, with newlines in between each item
	$string = implode("\n", $array);
	//Write that whole sting to file.
	fwrite($handle, $string);
	fclose($handle);
}
 
 
// Initialize your array by calling your function to open file.
 
$items = openFile();
 
// Check for GET Requests
    // If there is a get request; remove the appropriate item.
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	unset($items[$id]);
	saveFile($items);
} 

 
// Check for POST Requests
    // If there is a post request; add the items.
if (isset($_POST['newitem'])) {
	//Assign newitem from the form the itemToAdd
	$itemToAdd = $_POST['newitem'];
	//Array push that new item onto the existing list.
	$items[] = $itemToAdd;
	//Save the whole list to file.
	saveFile($items);

}
 
?>
 
<html>
<head>
    <title>TODO App</title>
</head>
<body>

 	<h1>To-Do List</h1>
<!-- Echo Out the List Items -->

<ol>

	<?php

		//This loops through the items array and outputs individual list items.
		foreach ($items as $key => $item) {
			echo "<li>" . "<a href=\"?id=$key\">X<a> " . $item ."</li>";
		}

	?>

</ol> 

<!-- Create a Form to Accept New Items -->
<form method="POST" name="add-form" action="index.php">

	<label>Add An Item:</label>
	<input id="newitem" name="newitem" type="text">

	<button type="submit">Add</button>

</form>


 
</body>
</html>