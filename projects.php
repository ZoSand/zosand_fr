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
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
);
        } catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
        ?>
        <article>
            <h2>Match contre Joueur A</h2>
            <ul>
                <li><span>Lieu</span> Paris</li>
                <li><span>Date</span> 01/04/2022,</li>
                <li><span>Places</span> 340</li>
                <li><span>Billeterie</span> <a href="#">Lien</a></li>
            </ul>
        </article>
        <article>
            <ul>
                <li><span>Lieu</span> Paris</li>
                <li><span>Date</span> 01/04/2022,</li>
                <li><span>Places</span> 340</li>
                <li><span>Billeterie</span> <a href="#">Lien</a></li>
            </ul>
        </article>
        <article>
            <h2>Match contre Joueur A</h2>
            <ul>
                <li><span>Lieu</span> Paris</li>
                <li><span>Date</span> 01/04/2022,</li>
                <li><span>Places</span> 340</li>
                <li><span>Billeterie</span> <a href="#">Lien</a></li>
            </ul>
        </article>
        </article>
        <article>
            <h2>Match contre Joueur A</h2>
        </article>
    </div>


<?php
include("./footer.php");
?>