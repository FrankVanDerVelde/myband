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
$templateParser->assign('title', 'League of Legends');

// Display template: output html
$templateParser->display('head.tpl');

$action = isset($_GET['action'])?$_GET['action']:'home';

	switch ($action) {
		case 'home':
			$page_nr = isset($_GET['page_number'])?$_GET['page_number']:1;
			
			
			// get newsarticles fromd database
			include('model/select_newsarticles.php');
			
			
			// calculate number of newsarticles
			include('model/get_nr_articles.php');
			$templateParser->assign('total_number_newsarticles', $total_number_newsarticles);
			
			
			
			$templateParser->assign('result', $result);

			$templateParser->display('newsarticles.tpl');
			break;
				
			case 'champions':
			include('model/select_champions.php');
			$templateParser->assign('resultchampions', $resultchampions);
  			$templateParser->display('champions.tpl');
			break;
			
			case 'e-sport':
			include('model/select_e_sports.php');
			$templateParser->assign('resultesport', $resultesport);
  			$templateParser->display('e-sport.tpl');
			break;
			
			case 'about':
			include('model/select_about.php');
			$templateParser->assign('resultabout', $resultabout);
  			$templateParser->display('about.tpl');
			break;
			
			case 'contact':
			$templateParser->display('contact.tpl');
			break;
			
			case 'zoeken':
			$templateParser->display('zoeken.tpl');
			break;
			
			case 'details':
			include('model/details.php');
			$templateParser->assign('resultchampionsdetails', $resultchampionsdetails);
			$templateParser->display('details.tpl');
			break;
	}
 
$templateParser->display('footer.tpl');

