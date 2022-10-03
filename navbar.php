<header>
    <nav class="navbar">
        <ul>
            <li>
                <a href="/"
                    <?php if ($_SERVER['SCRIPT_NAME'] == "/index.php") { ?>
                        class="active"
                    <?php } ?>>
                    About Me
                </a>
            </li>
            <?php
            $pages = scandir("/pages");
            foreach ($pages as $page) {
                ?>
                <li>
                    <a href="/"
                        <?php if ($_SERVER['SCRIPT_NAME'] == "/unknown.php") { ?>
                            class="active"
                        <?php } ?>>
                        Projects
                    </a>
                </li>
                <?php
            }
            ?>

            <!-- TODO: add sections here -->
            <li>
                <a href="/pages/contact.php"
                    <?php if ($_SERVER['SCRIPT_NAME'] == "/pages/contact.php") { ?>
                        class="active"
                    <?php } ?>>
                    Contact
                </a>
            </li>
        </ul>
    </nav>
</header>
