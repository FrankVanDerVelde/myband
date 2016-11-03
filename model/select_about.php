<?php

$resultabout = $mysqli->query("SELECT * FROM about");

$resultabout = convertResultToArray($resultabout);