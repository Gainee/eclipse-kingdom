<nav id ="shop1">
    <ol>
        <?php
        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
        $path_parts = pathinfo($phpSelf);
        $current = $path_parts['filename'];
        
        print '<li class = "shop-left"><a id="';
        if($current == "info"){
            print'currentLink';
        }
        print '" href="info.php">';
        print 'General';
        print '</a></li>';
        
        print '<li><a id="';
        if($current == "plugins"){
            print'currentLink';
        }
        print '" href="plugins.php">';
        print 'Plugins';
        print '</a></li>';
        
        print '<li><a id="';
        if($current == "events"){
            print'currentLink';
        }
        print '" href="events.php">';
        print 'Events/Arenas';
        print '</a></li>';
        
        print '<li><a id="';
        if($current == "crates"){
            print'currentLink';
        }
        print '" href="crates.php">';
        print 'Crates';
        print '</a></li>';
        
        
        ?>
    </ol>
</nav>