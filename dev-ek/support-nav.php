<nav id ="shop1">
    <ol>
        <?php
        
        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
        $path_parts = pathinfo($phpSelf);
        $current = $path_parts['filename'];
        
        //print '<li class = "shop-left"><a id="';
        //if($current == "support"){
        //    print'currentLink';
        //}
        //print '" href="support.php">';
        //print 'Support';
        //print '</a></li>';
        
        print '<li class = "shop-left"><a id="';
        if($current == "report"){
            print'currentLink';
        }
        print '" href="report.php">';
        print 'Report';
        print '</a></li>';
        
        print '<li><a id="';
        if($current == "appeal"){
            print'currentLink';
        }
        print '" href="appeal.php">';
        print 'Appeal';
        print '</a></li>';
        
        
        ?>
    </ol>
</nav>