<?php
include "top.php";
include "support-nav.php";

// SECTION: 1b Security
     
//$thisURL = $domain . $phpSelf;
    
    
// SECTION: 1c form variables
$comments = "";


// SECTION: 1d form error flags

$commentsERROR = false;


// SECTION: 1e misc variables

$errorMsg = array();
$dataRecord = array();
$mailed = false;

// SECTION: 2 Process for when the form is submitted
    
if (isset($_POST["btnSubmit"])) {
    
        // SECTION: 2a Security
    
        //if (!securityCheck($thisURL)) {
        //    $msg = "<p>Sorry you cannot access this page. ";
        //    $msg.= "Security breach detected and reported.</p>";
        //    die($msg);
        //}
        
        // SECTION: 2b Sanitize (clean) data 
    
        
        $comments = htmlentities($_POST["txtComments"], ENT_QUOTES, "UTF-8");
        $dataRecord[] = $comments;
        
        
        // SECTION: 2c Validation
    
        
        
        if($comments != "") {
            if (!verifyAlphaNum($comments)){
                $errorMsg[] = "Your comments appear to have extra characters that are not allowed.";
                $commentsERROR = true;
            }
        }
        
        
        // SECTION: 2d Process Form - Passed Validation
    
        if (!$errorMsg) {
            if ($debug)
                print "<p>Form is valid</p>";
        
   
            // SECTION: 2e Save Data
    
            //$fileExt = ".csv";
            //$myFileName = "data/registration"; 
    
            //$filename = $myFileName . $fileExt;
    
            if ($debug){
                print "\n\n<p>filename is " . $filename;
            }
    
            //open the file for append
            //$file = fopen($filename,'a');
    
            //write the forms informations
            //fputcsv($file,$dataRecord);
    
            //fclose($file);
        
            
            // SECTION: 2f Create message
   
            $message = "<h3>Website Report</h3>";
    
            foreach ($_POST as $key => $value) {
                if ($key != "btnSubmit"){
                    $message .= "<p>".$comments . "</p>";
                }
                
            }
  
            // SECTION: 2g Mail to user
  
            $to = "eclipsekingdommc@gmail.com"; 
            $cc = "";
            $bcc = "";
    
            $from = "williamsutton7@gmail.com";
   
            $todaysDate = strftime("%x");
            $subject = "Website Report " . $todaysDate;
    
            $mailed = sendMail($to ,$cc ,$bcc ,$from ,$subject ,$message);
    
         } //end form is valid
    
} //ends if form was submitted

// SECTION 3 Display Form

?>
<article id="main">
    
    <?php
    
    // SECTION 3a.
    
    if (isset($_POST["btnSubmit"]) AND empty($errorMsg)) {
        print "<h3>Thank you. Your report will be reviewed shortly.</h3>";
        
    } else {
    
    print "<h2>Report</h2>";
    print "<p>Found an exploit or error?</p>";
    print "<p>Know of cheating or inapropriate behavior?</p>";
    print "<p>Report it here.</p>";
    
    
    // SECTION 3b Error Messages
   
    if ($errorMsg) {
        print '<div id="errors">' . "\n";
        print "<h3>The following mistakes need to be fixed.</h3>\n";
        print "<ol>\n";
    
        foreach ($errorMsg as $err) {
            print "<li>" . $err . "</li>\n";
        }
    
        print "</ol>\n";
        print "</div>\n";
    }
    
    // SECTION 3c html Form
    
    ?>
    
    <form action="<?php print $phpSelf; ?>"
          id="frmRegister"
          method="post">
        
                <fieldset class="txtarea">
                    <label class="required" for="txtComments"></label>
                    <textarea <?php if ($commentsERROR) print 'class="mistake"'; ?>
                        id="txtComments"
                        name="txtComments"
                        onfocus="this.select()"
                        style="width: 100%; height: 25em;"><?php print $comments; ?></textarea>
                </fieldset>
                
                
            <fieldset class="buttons">
                <legend></legend>
                <input class="button" id="btnSubmit" name="btnSubmit" type="submit" value="Report" >
            </fieldset> <!-- ends buttons -->
    </form>
    
    <?php
    } //end body submit
    ?>
    
     
</article>

<?php include "footer.php"; ?>

</body>
</html>