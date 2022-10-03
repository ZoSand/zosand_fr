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
                <a href="/contact.php"
                    <?php if ($_SERVER['SCRIPT_NAME'] == "/contact.php") { ?>
                        class="active"
                    <?php } ?>>
                    Contact
                </a>
            </li>
            <!-- TODO: add sections here -->
            <li style="float:right">
                <a href="/about.php"
                    <?php if ($_SERVER['SCRIPT_NAME'] == "/about.php") { ?>
                        class="active"
                    <?php } ?>>
                    About me
                </a>
            </li>
        </ul>
    </nav>
</header>
