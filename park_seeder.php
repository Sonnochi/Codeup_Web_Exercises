<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'national_parks_db');
define('DB_USER', 'np_user');
define('DB_PASS', 'charlie3');

require 'inc/db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$parks =[
	['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => '47389.67'],
	['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => '242755.94'],
	['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1964-09-12', 'area_in_acres' => '337597.83'],
	['name' => 'Death Valley', 'location' => 'California, Nevada', 'date_established' => '1994-10-31', 'area_in_acres' => '3372401.96'],
	['name' => 'Denali', 'location' => 'Alaska', 'date_established' => '1917-02-26', 'area_in_acres' => '4740911.72'],
	['name' => 'Glacier', 'location' => 'Montana', 'date_established' => '1910-05-11', 'area_in_acres' => '1013572.41'],
	['name' => 'Haleakalā', 'location' => 'Hawaii', 'date_established' => '1916-08-01', 'area_in_acres' => '29093.67'],
	['name' => 'Isle Royale', 'location' => 'Michigan', 'date_established' => '1940-04-03', 'area_in_acres' => '571790.11'],
	['name' => 'Katmai', 'location' => 'Alaska', 'date_established' => '1980-12-02', 'area_in_acres' => '3674529.68 '],
	['name' => 'Olympic', 'location' => 'Washington', 'date_established' => '1938-06-29', 'area_in_acres' => '922650.86 ']	
];


foreach ($parks as $park){
	$query = "INSERT INTO parks (name, location, date_established, area_in_acres)
	VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

	$dbc->exec($query);
};