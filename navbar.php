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
            <li>
                <a href="/"
                    <?php if ($_SERVER['SCRIPT_NAME'] == "/unknown.php") { ?>
                        class="active"
                    <?php } ?>>
                    Projects
                </a>
            </li>
            <li>
                <a href="/"
                    <?php if ($_SERVER['SCRIPT_NAME'] == "/unknown.php") { ?>
                        class="active"
                    <?php } ?>>
                    Skills
                </a>
            </li>
            <!-- TODO: add sections here -->
            <li style="float:right">
                <a href="/contact.php"
                    <?php if ($_SERVER['SCRIPT_NAME'] == "/contact.php") { ?>
                        class="active"
                    <?php } ?>>
                    Contact
                </a>
            </li>
        </ul>
    </nav>
</header>
