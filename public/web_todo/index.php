<?php

// Initialize your array by calling your function to open file.
 
$items = openFile();

// Verify there were uploaded files and no errors
if (count($_FILES) > 0 && $_FILES['file1']['error'] == UPLOAD_ERR_OK && $_FILES['file1']['error'] == 'text/plain'){
    // Set the destination directory for uploads
    $uploadDir = '/vagrant/sites/codeup.dev/public/uploads/';

    // Grab the filename from the uploaded file by using basename
    $filename = basename($_FILES['file1']['name']);

    // Create the saved filename using the file's original name and our upload directory
    $savedFilename = $uploadDir . $filename;

    // Move the file from the temp location to our uploads directory
    move_uploaded_file($_FILES['file1']['tmp_name'], $savedFilename);

    //opening uploading file and merging onto existing array
    $new_array = openFile('../uploads/' . $filename);
    $items = array_merge($items, $new_array);
    
    // save function
    saveFile($items);


}


// Check if we saved a file
if (isset($savedFilename)) {
    // If we did, show a link to the uploaded file
    echo "<p>You can download your file <a href='/uploads/{$filename}'>here</a>.</p>";
}
 
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

<!-- Create a Form to Upload Files -->
	<h1>Upload File</h1>
<form method="POST" enctype="multipart/form-data" action="index.php">
	 <p>
            <label for="file1">File to upload: </label>
            <input type="file" id="file1" name="file1">
        </p>
        <p>
            <input type="submit" value="Upload">
        </p>
</form>

 
</body>
</html>