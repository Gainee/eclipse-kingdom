<nav id="submenu" class = "<?php if($current === "members" || $current === "staff"){ print "active";} ?>">
    <ul><a href = "members.php" class = "<?php if($current === "members"){ print "active";} ?>"><li><p>Members</p></li></a></ul>
    <ul><a href = "staff.php" class = "<?php if($current === "staff"){ print "active";} ?>"><li><p>Staff</p></li></a></ul>
</nav>
