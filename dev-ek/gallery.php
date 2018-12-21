
<?php
include "top.php";
?>

<article id="info-list">
    
    <?php
    $locations = array('g1.png','g2.png','g3.png','g4.png','g5.png','g6.png','g7.png','g8.png','g9.png','g10.png','g11.png','g12.png','g13.png','g14.png','g15.png','g16.png','g17.png','slider02.jpg','slider03.jpg','slider04.jpg', 'slider09.jpg','slider10.jpg','slider11.jpg');
    
    ?>
    <h1>Gallery</h1>
    <?php
    foreach($locations as $loc){
        print "<figure class='gal'>";
        print "<img src='images/".$loc."'>";
        print "</figure>"; 
    }
    ?>
    
</article> 

<?php include "footer.php"; ?>