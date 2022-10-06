<?php
include("./header.php");
?>

    <!--TODO: put main body here -->
<?php
$dbConfig = parse_ini_file('../db.ini');
try {
    $db = new PDO(
        "mysql:host={$dbConfig['host']};dbname={$dbConfig['username']};charset=utf8",
        $dbConfig["username"],
        $dbConfig["password"],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (Exception $e) {
    die('Error : ' . $e->getMessage());
}

$projectsStatement = $db->prepare('SELECT * FROM projects ORDER BY date DESC');
$projectsStatement->execute() or die(print_r($db->errorInfo(), true));
$projects = $projectsStatement->fetchAll();

if (count($projects) > 0) {
    echo '<div class="timeline">';

    foreach ($projects as $project) {
        ?>
        <article class=project>
            <h2 class="title" before-date=<?php echo $project["date"] ?>><?php echo $project["name"] ?></h2>
            <p>
                <?php echo $project["description"] ?>
            </p>
        </article>
        <?php
    }
    echo '</div>';
}
?>

<?php
include("./footer.php");
?>