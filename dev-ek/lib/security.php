<?php
print "<!-- BEGIN include security -->";

// performs a simple security check to see if page has submitted to itself
function securityCheck($fromURL = "") {
    $debugThis = false; //you have to want to test this
    
    $status = true; //starts thinking everything is good
    
    
    if ($fromURL != "") {
        $fromPage = htmlentities($_SERVER['HTTP_REFERER'], ENT_QUOTES, "UTF-8");
    
        
        $fromPage = preg_replace('#^https?:#', '', $fromPage);
        
        if ($debugThis)
            print "<p>From: " . $fromPage . " should match your Url: " . $fromURL;
        
        if ($fromPage != $fromURL) {
            $status = false;
        }
    }
    
    return $status;
}
print "<!-- END include security -->";
?>