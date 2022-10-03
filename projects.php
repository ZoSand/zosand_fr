<?php
include("./header.php");
?>
    <!--TODO: put main body here -->

<?php
$dbConfig = parse_ini_file('../db.ini');
echo $dbConfig["username"]
?>


<?php
include("./footer.php");
?>