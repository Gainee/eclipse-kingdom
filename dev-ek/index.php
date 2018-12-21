<?php
include "top.php";

$myFileName="data/image-location";

$fileExt=".csv";

$filename = $myFileName . $fileExt;

$file=fopen($filename, "r");

while(!feof($file)){
        $records[]=fgetcsv($file);
    }
    
fclose($file);
?>

<article id="banner">
    <h1>Eclipse Kingdom</h1>
    <h6>IP: play.eclipsekingdom.net</h6>
</article>    

<article id="info-list">
    <!-- ORBOFNIGHTCRAFT ITZPAPALOTI BLOODMOON SURVIVAL -->
    <h2>News:</h2>
    <p>Grand Opening - Summer 2018!</p>
</article>

<?php include "footer.php"; ?>

</body>
</html>