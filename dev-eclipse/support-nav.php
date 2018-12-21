<nav id="submenu" class = "<?php if($current === "support" || $current === "report" || $current === "appeal"){ print "active";} ?>">
    <ul><a href = "support.php" class = "<?php if($current === "support"){ print "active";} ?>"><li><p>General</p></li></a></ul>
    <ul><a href = "report.php" class = "<?php if($current === "ranks"){ print "active";} ?>"><li><p>Report</p></li></a></ul>
    <ul><a href = "appeal.php" class = "<?php if($current === "kits"){ print "active";} ?>"><li><p>Appeal</p></li></a></ul>
</nav>