<!-- ######################     Main Navigation   ########################## -->
<nav>
    <ol>
        <?php
        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
        $path_parts = pathinfo($phpSelf);
        $current = $path_parts['filename'];
        
        print '<li id="menu-left"><a href="index.php">';
        print '<figure><img src="images/logo2.jpg"></figure>';
        print '</a></li>';
        
        print '<li><a class="menu" id="';
        if($current == "forum"){
            print'currentLink';
        }
        print '" href="forum.php">';
        print 'Forums';
        print '</a></li>';
        
        print '<li><a class="menu" id="';
        if($current == "shop" || $current == "ranks" || $current == "kits" || $current == "spells" || $current == "tittle"){
            print'currentLink';
        }
        print '" href="shop.php">';
        print 'Shop';
        print '</a></li>';
        
        print '<li><a class="menu" id="';
        if($current == "vote"){
            print'currentLink';
        }
        print '" href="vote.php">';
        print 'Vote';
        print '</a></li>';
        
        //print '<li><a class="menu" id="';
        //if($current == "members" || $current == "staff"){
        //    print'currentLink';
        //}
        //print '" href="members.php">';
        //print 'Community';
        //print '</a></li>';
        
        print '<li><a class="menu" id="';
        if($current == "support" || $current == "report" || $current == "faq" || $current == "appeal"){
            print'currentLink';
        }
        //print '" href="support.php">';
        print '" href="report.php">';
        print 'Support';
        print '</a></li>';
        
        print '<li><a class="menu" id="';
        if($current == "info" || $current == "rules" || $current == "world" || $current == "tips" || $current == "plugins" || $current == "events" || $current == "crates"){
            print'currentLink';
        }
        print '" href="info.php">';
        print 'Info';
        print '</a></li>';
        
        print '<li><a class="menu" id="';
        if($current == "gallery"){
            print'currentLink';
        }
        print '" href="gallery.php">';
        print 'Gallery';
        print '</a></li>';
        
        print '<li class="loggedin" id="menu-right"><a href="">';
        print 'Logout';
        print '</a></li>';
        
        print '<li class="loggedin" id="menu-right"><a href="">';
        print 'Account';
        print '</a></li>';
        
        print '<li class="loggedin" id="menu-right"><a href="">';
        print 'Cart';
        print '</a></li>';
        
        print '<li id="menu-right"><a href="">';
        print 'Login';
        print '</a></li>';
        
        print '<li id="menu-right"><a href="">';
        print 'Register';
        print '</a></li>';
        ?>
    </ol>
</nav>