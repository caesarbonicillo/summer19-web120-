<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "David's WEB120 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'contactme.php':
        $title = "David's WEB120 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact David';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
   }

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['table.php'] = "Table";
$nav1['contactme.php'] = "Contact David";

/* 
Creating a function to generate links and apply the class=selected to currently called page

      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>
*/

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    
    return $myReturn;
}

?>