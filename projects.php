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
            <h2 class="title"
                before-date=<?php if (isset($project["date"])) echo $project["date"] ?>><?php if (isset($project["name"])) echo $project["name"] ?></h2>

            <?php
            if (isset($project["language"])) {
                echo "<h4>" . $project["language"] . "</h4>";
            }

            if (isset($project["role"]))
                echo "<h5>" . $project["role"] . " programmer</h5>";
            ?>

            <p>
                <?php
                if (isset($project["description"]))
                    echo $project["description"]
                ?>
            </p>
            <?php
            $imgStatement = $db->prepare('SELECT path FROM images WHERE projectId = :projectId ORDER BY id DESC');
            $imgStatement->execute(["projectId" => $project["id"]]) or die(print_r($db->errorInfo(), true));
            $linkedImages = $imgStatement->fetchAll();
            foreach ($linkedImages as $image) {
                ?>
                <img src=<?php echo $image["path"] ?>>
                <?php
            }
            ?>
        </article>
        <?php
    }
    echo '</div>';
}
?>

<?php
include("./footer.php");
?>