<?php

$resultchampions = $mysqli->query("SELECT * FROM champions");

$resultchampions = convertResultToArray($resultchampions);
