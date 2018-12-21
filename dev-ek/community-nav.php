<nav id ="shop1">
    <ol>
        <?php
        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
        $path_parts = pathinfo($phpSelf);
        $current = $path_parts['filename'];
        
        print '<li class = "shop-left"><a id="';
        if($current == "members"){
            print'currentLink';
        }
        print '" href="members.php">';
        print 'Members';
        print '</a></li>';
        
        print '<li><a id="';
        if($current == "staff"){
            print'currentLink';
        }
        print '" href="staff.php">';
        print 'Staff';
        print '</a></li>';
        
        ?>
    </ol>
</nav>