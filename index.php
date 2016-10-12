<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';

include 'includes/funcs.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Me First And The Gimme Gimmes');

// Display template: output html
$templateParser->display('head.tpl');

$action = isset($_GET['action'])?$_GET['action']:'about';

	switch ($action) {
		case 'home':
			// get newsarticles fromd database
			include('model/select_newsarticles.php');
			$templateParser->assign('result', $result);
			$templateParser->display('newsarticles.tpl');
			break;
				
			case 'champions':
			$templateParser->display('champions.tpl');
			break;
			
			case 'e-sport':
			$templateParser->display('e-sport.tpl');
			break;
			
			case 'about':
			$templateParser->display('about.tpl');
			break;
			
			case 'contact':
			$templateParser->display('contact.tpl');
			break;
	}






$templateParser->display('footer.tpl');

