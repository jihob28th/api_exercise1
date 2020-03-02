<?php 
$loadnav = (isset($_GET['loadnav']) && $_GET['loadnav'] != '') ? $_GET['loadnav']: '';
?>
<html> 
    <head>
      <title>  API Exercise 1 </title>
    </head>
    <body>
                        <ul> 
                        <li> <a href="index.php?loadnav=readprod"> Show Product</a> </li>
                        <li> <a href="index.php?loadnav=categories"> Categories</a> </li>
                        <li> <a href="index.php?loadnav=create"> Create  </a> </li>
                        </ul>
               
                        <?php 
                        switch($loadnav){
                            case 'readprod':
                            require_once 'show.php';
                            break;
                            case 'categories':
                            require_once 'categories.php';
                            break;
                            case 'create':
                            require_once 'form_create.php';
                            break;
                        }
                        ?>

    </body>
</html>
