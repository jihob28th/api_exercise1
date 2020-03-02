<?php 
$loadnav = (isset($_GET['loadnav']) && $_GET['loadnav'] != '') ? $_GET['loadnav']: '';
?>
<html> 
    <head>
      <title>  API Exercise 1 </title>
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="navhead">
            <div class="navigation">
                        <ul> 
                        <li> <a href="index.php?loadnav=home"> <b>HOME </b></a> </li>
                        <li> <a href="index.php?loadnav=list"> SHOW PRODUCT</a> </li>
                        <li> <a href="index.php?loadnav=categories"> CATEGORIES</a> </li>
                        <li> <a href="index.php?loadnav=create"> CREATE  </a> </li>
                        </ul>
                        </div>
                    </div>
               
                        <?php 
                        switch($loadnav){
                            case 'list':
			    require_once('show.php');
		            break;
                            case 'categories':
                            require_once 'categories.php';
                            break;
                            case 'create':
                            require_once 'form_create.php';
                            break;
                            case 'profile':
                            require_once 'pro_profile.php';
                            break;
                            default:
                            require_once 'home.php';
                            break;
                        }
                        ?>
        <div class="footer"> By: Carl Aguilar BSIT-2A</div>
    </body>
</html>
