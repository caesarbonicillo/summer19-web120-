<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/
date_default_timezone_set('America/Los_Angeles');


define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Big";
//        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'mobile.php':
        $title = "Mobile";
//        $logo = 'fa-home';
        $PageID = 'Mobile Vs Native App';
    break;
    
    case 'gallery.php':
        $title = "Gallery";
//        $logo = 'fa-home';
        $PageID = 'Galleries';
    break;
    
    case 'flexbox.php':
        $title = "Flexbox";
//        $logo = 'fa-home';
        $PageID = 'Flexbox';
    break;
    
    case 'shoppingcart.php':
        $title = "Shopping Cart";
//        $logo = 'fa-home';
        $PageID = 'Shopping Carts ';
    break;
        
    default:
        $title = THIS_PAGE;
//        $logo = 'fa-home';
        $PageID = '';
   }

$nav1['index.php'] = "Big";
$nav1['mobile.php'] = "Mobile";
$nav1['gallery.php'] = "Gallery";
$nav1['flexbox.php'] = "Flexbox";
$nav1['shoppingcart.php'] = "Shopping Cart";
$nav1['webcam.php'] = "Web Cam";
$nav1['calendar.php'] = "Calendar";
$nav1['seo.php'] = "Seo";
$nav1['contactme.php'] = "Contact Me ";
/* 
Creating a function to generate links and apply the class=selected to currently called page
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