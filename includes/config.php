<?php 

//This file contains configuration settings, like database settings
//For security reasons, this file should be placed in webroot

// Define project status
define('PROJECT_STATUS','development');

// Language settings (Dutch)
setlocale(LC_ALL, 'nl_NL');

// Database settings local
define('DB_HOST','localhost'); 
define('DB_NAME','myband');	   
define('DB_USERNAME','root');  
define('DB_PASSWORD','');      



// Database settings online
//define('DB_HOST','localhost'); 
//define('DB_NAME','21240_myband');	   
//define('DB_USERNAME','21240_MyBand');  
//define('DB_PASSWORD','wyzcaxru');      

?>
