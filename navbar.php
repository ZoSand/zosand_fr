<header>
    <nav class="navbar">
        <ul>
            <li>
                <a href="/"
                    <?php if ($_SERVER['SCRIPT_NAME'] == "/index.php") { ?>
                        class="active"
                    <?php } ?>>
                    Home
                </a>
            </li>
            <li>
                <a href="projects.php"
                    <?php if ($_SERVER['SCRIPT_NAME'] == "/projects.php") { ?>
                        class="active"
                    <?php } ?>>
                    Projects
                </a>
            </li>
            <li>
                <a
                    href="contact.php"
                    <?php if ($_SERVER['SCRIPT_NAME'] == "/contact.php") { ?>
                        class="active"
                    <?php } ?>>
                    Contact
                </a>
            </li>
        </ul>
    </nav>
</header>
