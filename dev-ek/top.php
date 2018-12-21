<!DOCTYPE html>
<html lang="en">
    <head>
        <title>eclipse kingdom</title>
        
        <meta charset="utf-8">
        <meta name="author" content="William Sutton">
        <meta name="description" content="eclipse kingdom">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="ek1.css" type="text/css" media="screen">
        
        <?php
        $debug = false;
        if (isset($_GET["debug"])) {
            $debug = true;
        }
        
        //PATH SETUP
        
        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
        
        $path_parts = pathinfo($phpSelf);
        
        if ($debug){
            print "<p>php Self: " . $phpSelf;
            print "<p>Path Parts<pre>";
            print_r($path_parts);
            print "</pre></p>";
        }
        
        //include all libraries.
        
        print "<!-- include libraries -->";
 
        require_once('lib/security.php');
 
        if ($path_parts['filename'] == "signup" || $path_parts['filename'] == "login" || $path_parts['filename'] == "report" || $path_parts['filename'] == "appeal") {
            print "<!-- include form libraries -->";
            include "lib/validation-functions.php";
            include "lib/mail-message.php";
        }
 
        print "<!-- finished including libraries -->"; 
        
        ?>
    </head>
    
    <!-- ################ body section ######################### -->
    
    <?php
    print '<body id="' . $path_parts['filename'] . '">';
    
    include "header.php";
    include "nav.php";
    
    if ($debug){
        print "<p>DEBUG MODE IS ON</p>";
    }
    ?>