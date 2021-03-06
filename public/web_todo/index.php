<?php
 

 require'../../inc/filestore.php';

// Initialize your array by calling your function to open file.

// Create a new instance of Conversation
$itemsList = new Filestore('list.txt');
$items = $itemsList->read();





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

	    // create a new instance of ToDoList
	    $stuffList = new Filestore($filename); 
	    $stuffList->filename = $savedFilename;


	    // Use that new instance to read in the uploaded file; assign to $new_array
	    $new_array = $stuffList->read();


	    // merge $new_array with $items (done!)
	    $items = array_merge($items, $new_array);
	    
	    // save your updated $items array to the global todo list
	    $itemsList->write($items);


}


 
// Check for GET Requests
    // If there is a get request; remove the appropriate item.
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	//$itemsList->items = array_values($itemsList->items);
	unset($items[$id]);
	$itemsList->write($items);
} 

 
// Check for POST Requests
    // If there is a post request; add the items.
if (isset($_POST['newitem'])) {
	if ($_POST['newitem'] ) {
		strlen('newitem') 
	}

	//Assign newitem from the form the itemToAdd
	$items[] = $_POST['newitem'];
	//Save the whole list to file.
	$itemsList->write($items);
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



		<!-- This loops through the items array and outputs individual list items. -->
		
		<? foreach($items as $key => $item): ?>

		<li>
			<?= htmlspecialchars(strip_tags($item)) ?>
			<a href="?id=<?=$key?>"> X </a>
		</li> 

		<? endforeach ?>


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