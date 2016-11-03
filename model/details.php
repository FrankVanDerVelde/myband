<?php
$champ = $_GET['id'];

$resultchampionsdetails = $mysqli->query("SELECT * FROM champions WHERE id = '$champ'");

$resultchampionsdetails = convertResultToArray($resultchampionsdetails);