<?php
include("./header.php");
?>

    <!--TODO: put main body here -->
    <div class="timeline">
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

        $projectsStatement = $db->prepare('SELECT * FROM projects ORDER BY date');
        $projectsStatement->execute();
        $projects = $projectsStatement->fetchAll();
        foreach ($projects as $project) {
            ?>
            <article>
                <h2><?php echo $project["name"] ?> <small>(<?php echo $project["date"] ?>)</small></h2>
                <p>
                    <?php echo $project["description"] ?>
                </p>
            </article>
            <?php
        }
        ?>
    </div>


<?php
include("./footer.php");
?>