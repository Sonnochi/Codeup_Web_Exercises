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
    $offset = ($pageNumber - 1) * 4;
    $query = "SELECT name, location, date_established, area_in_acres, description FROM parks LIMIT :limit OFFSET :offset";

    $stmt = $dbc->prepare($query);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $numberOfParks = $dbc->query('SELECT count(*) FROM parks')->fetchColumn();

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
                <td><?= $park['date_established'] ?></td>
                <td><?= $park['area_in_acres'] ?></td>
                <td><?= $park['description'] ?></td>
            </tr>
        <?php endforeach; ?>
        
        </table>
        
        <? if($pageNumber > 1): ?>
            <a href="?page=<?=$pageNumber - 1 ?>" class='btn btn-info' id="previous">Previous</a>
        <? endif ?>
        
        <? if($pageNumber <= 2): ?>
            <a href="?page=<?=$pageNumber + 1 ?>" class='btn btn-info' id="next">Next</a>
        <? endif ?>
        
       
    </body>
</html>
