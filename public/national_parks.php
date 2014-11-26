<?php

    define('DB_HOST', '127.0.0.1');
    define('DB_NAME', 'national_parks_db');
    define('DB_USER', 'np_user');
    define('DB_PASS', 'charlie3');

    require '../inc/db_connect.php';

    if(isset($_GET['page'])){
        $pageNumber = $_GET['page'];
    } else{
        $pageNumber = 1;
    }

    $limit = 4;
    $offset = ($pageNumber - 1) * $limit;
    $query = "SELECT name, location, date_established, area_in_acres, description FROM parks LIMIT :limit OFFSET :offset";

    $stmt = $dbc->prepare($query);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $numberOfParks = $dbc->query('SELECT count(*) FROM parks')->fetchColumn();
    
    if($_POST) {
    if(empty($_POST['name']) || empty($_POST['location']) || empty($_POST['date_established']) || empty($_POST['area_in_acres']) || empty($_POST['description'])) {
         echo "<div class='alert alert-info' role='alert'> Please fill in all fields. </div>";
    } else {
        if(strlen($_POST['description'] < 125)) {
            $query = $dbc->prepare('INSERT INTO parks (name, location, date_established, area_in_acres, description) 
                                    VALUES(:name, :location, :date_established, :area_in_acres, :description)');
            $query->bindValue(':name', $_POST['name'], PDO:: PARAM_STR);
            $query->bindValue(':location', $_POST['location'], PDO:: PARAM_STR);
            $query->bindValue(':date_established', $_POST['date_established'], PDO:: PARAM_STR);
            $query->bindValue(':area_in_acres', $_POST['area_in_acres'], PDO:: PARAM_STR);
            $query->bindValue(':description', $_POST['description'], PDO:: PARAM_STR);
            $query->execute();
        }
    }
}

?>



<!DOCTYPE html>
<html>
    <head>
        <title>National Parks</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <h1>National Parks</h1>
        <table class="table table-striped">
            <tr>
                <th>Park</th>
                <th>Location</th>
                <th>Date Established</th>
                <th>Area in Acres</th>
                <th>Description</th>
            </tr>
            
        <?php foreach ($parks as $park): ?>
            <tr>
                <td><?= $park['name'] ?></td>
                <td><?= $park['location'] ?></td>
                <td><?= date('F j, Y', strtotime($park['date_established'])); ?></td>
                <td><?= $park['area_in_acres'] ?></td>
                <td><?= $park['description'] ?></td>
            </tr>
        <?php endforeach; ?>
        
        </table>
        
        <? if($pageNumber > 1): ?>
            <a href="?page=<?=$pageNumber - 1 ?>" class='btn btn-info' id="previous">Previous</a>
        <? endif ?>
        
        <!-- work on this line to display next page -->
        <? if($pageNumber <= 2): ?>
            <a href="?page=<?=$pageNumber + 1 ?>" class='btn btn-info' id="next">Next</a>
        <? endif ?>
        
        <form method="POST" action="/national_parks.php" class='form-horizontal' role='form'>
            <h2>Insert a New Park</h2>
            <input id="name" name="name" placeholder="Add Park Name" autofocus>
            <input id="location" name="location" placeholder="Add State" autofocus>
            <input id="date_established" name="date_established" placeholder="yyyy/mm/dd">
            <input id="area_in_acres" name="area_in_acres" placeholder="Add Acreage">
            <textarea id="description" name="description" placeholder="Add Description" autofocus></textarea>
            
            <button id="add" class="btn btn-info">Submit</button>  
        </form>
        
        
        
    </body>
</html>
