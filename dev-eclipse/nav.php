<!-- ######################     Main Navigation   ########################## -->
<?php
        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
        $path_parts = pathinfo($phpSelf);
        $current = $path_parts['filename'];
?>
<nav class="topnav" id="myTopnav">
    <ul class="homeop" id="myHomeop"><a href = "index.php"><li><figure><img src="images/logo2.jpg"></figure></li></a></ul>
    <ul class="iconop" id="myIconop"><a href="javascript:void(0);" onclick="myFunction()" onclick="offAll()"><li><p>&#9776;</p></li></a></ul>
    <ul class="dropdown" id="myForumop"><section class="<?php if($current === "forum"){ print "active";} ?>"><a href ="forum.php" class = "<?php if($current === "forum"){ print "active";} ?>"><li><p>Forum</p></li></a></section></ul>
    <ul class="dropdown" id="myCommunityop">
        <section class = "<?php if($current === "members" || $current === "staff"){ print "active";} ?>">
            <a onclick="myCommunityFunction()"><li><p>Community</p></li></a>
            <a href = "members.php" class = "<?php if($current === "members"){ print "active";} ?>"><li><p>Members</p></li></a>
            <a href = "staff.php" class = "<?php if($current === "staff"){ print "active";} ?>"><li><p>Staff</p></li></a>
        </section>
    </ul>
    <ul class="dropdown" id="mySupportop">
        <section class = "<?php if($current === "support" || $current === "report" || $current === "appeal"){ print "active";} ?>">
            <a onclick="mySupportFunction()"><li><p>Support</p></li></a>
            <a href = "support.php" class = "<?php if($current === "support"){ print "active";} ?>"><li><p>General</p></li></a>
            <a href = "report.php" class = "<?php if($current === "report"){ print "active";} ?>"><li><p>Report</p></li></a>
            <a href = "appeal.php" class = "<?php if($current === "appeal"){ print "active";} ?>"><li><p>Appeal</p></li></a>
        </section>
    </ul>
    <ul class="dropdown" id="myInfoop">
        <section class = "<?php if($current === "info" || $current === "rules" || $current === "world" || $current === "tips" || $current === "plugins" || $current === "events" || $current === "crates"){ print "active";} ?>">
            <a onclick="myInfoFunction()"><li><p>Info</p></li></a>
            <a href = "info.php" class = "<?php if($current === "info"){ print "active";} ?>"><li><p>General</p></li></a>
            <a href = "rules.php" class = "<?php if($current === "rules"){ print "active";} ?>"><li><p>Rules</p></li></a>
            <a href = "tips.php" class = "<?php if($current === "tips"){ print "active";} ?>"><li><p>Tips</p></li></a>
            <a href = "world.php" class = "<?php if($current === "world"){ print "active";} ?>"><li><p>World</p></li></a>
            <a href = "plugins.php" class = "<?php if($current === "plugins"){ print "active";} ?>"><li><p>Plugins</p></li></a>
            <a href = "events.php" class = "<?php if($current === "events"){ print "active";} ?>"><li><p>Events</p></li></a>
            <a href = "crates.php" class = "<?php if($current === "crates"){ print "active";} ?>"><li><p>Crates</p></li></a>
        </section>
    </ul>
    <ul class="dropdown" id="myGalleryop"><section class = "<?php if($current === "gallery"){ print "active";} ?>"><a href = "gallery.php"><li><p>Gallery</p></li></a></section></ul>
    <ul class= "menu-right loggedin" id="farRight"><a href = ""><li><p>Logout</p></li></a></ul>
    <ul class= "menu-right loggedin"><a href = ""><li><p>Account</p></li></a></ul>
    <ul class= "menu-right loggedout" id="farRight"><a href = ""><li><p>Register</p></li></a></ul>
    <ul class= "menu-right loggedout"><a href = ""><li><p>Login</p></li></a></ul>
</nav>



<?php include shop-nav; ?>

<script>
window.onresize = offAll855;

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

function myCommunityFunction() {
    if(window.outerWidth > 855){
        location.href = "members.php";
    } else {
       var x = document.getElementById("myCommunityop");
        if (x.className === "dropdown") {
            x.className += " responsive";
        } else {
            x.className = "dropdown";
        } 
    }
}

function mySupportFunction() {
    if(window.outerWidth > 855){
        location.href = "support.php";
    } else {
       var x = document.getElementById("mySupportop");
        if (x.className === "dropdown") {
            x.className += " responsive";
        } else {
            x.className = "dropdown";
        } 
    }
}

function myInfoFunction() {
    if(window.outerWidth > 855){
        location.href = "info.php";
    } else {
       var x = document.getElementById("myInfoop");
        if (x.className === "dropdown") {
            x.className += " responsive";
        } else {
            x.className = "dropdown";
        } 
    }
}

function offAll(){
    var community = document.getElementById("myCommunityop");
    community.className = "dropdown";
    var support = document.getElementById("mySupportop");
    support.className = "dropdown";
    var info = document.getElementById("myInfoop");
    info.className = "dropdown";
}

function offAll855(){
    if(window.outerWidth > 855){
       var community = document.getElementById("myCommunityop");
       community.className = "dropdown"; 
       var support = document.getElementById("mySupportop");
       support.className = "dropdown"; 
       var info = document.getElementById("myInfoop");
       info.className = "dropdown"; 
    }
}
</script>
