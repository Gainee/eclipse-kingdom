<nav id ="shop1">
    <ol>
        <?php
        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
        $path_parts = pathinfo($phpSelf);
        $current = $path_parts['filename'];
        
        print '<li class = "shop-left"><a id="';
        if($current == "shop"){
            print'currentLink';
        }
        print '" href="shop.php">';
        print 'Overview';
        print '</a></li>';
        
        print '<li><a id="';
        if($current == "ranks"){
            print'currentLink';
        }
        print '" href="ranks.php">';
        print 'Ranks';
        print '</a></li>';
        
        print '<li><a id="';
        if($current == "kits"){
            print'currentLink';
        }
        print '" href="kits.php">';
        print 'Kits';
        print '</a></li>';
        
        print '<li><a id="';
        if($current == "spells"){
            print'currentLink';
        }
        print '" href="spells.php">';
        print 'Shouts';
        print '</a></li>';
        
        print '<li><a href="shop.php#pet">';
        print 'Pet';
        print '</a></li>';
        
        print '<li><a href="shop.php#tittle">';
        print 'Title';
        print '</a></li>';
        
        print '<li><a href="shop.php#plot">';
        print 'Plots';
        print '</a></li>';
        
        print '<li><a href="shop.php#fireworks">';
        print 'Fireworks';
        print '</a></li>';
        
        print '<li><a href="shop.php#warps">';
        print 'Warps';
        print '</a></li>';
        
        ?>
    </ol>
</nav>