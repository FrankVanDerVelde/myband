<?php

$resultesport = $mysqli->query("SELECT * FROM esport");

$resultesport = convertResultToArray($resultesport);