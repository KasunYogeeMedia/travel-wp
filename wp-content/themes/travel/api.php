<?php
/*
Template Name: API
*/
// Read the JSON data from the request body
$jsonData = file_get_contents('php://input');

// Parse the JSON data into a PHP array
$data = json_decode($jsonData, true);
session_start();
$_SESSION["final_data"] = $data;

 ?>
