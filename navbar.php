<?php
$menu = array(
    'About' => array('text' => 'About me', 'url' => 'index.php'),
    'gallery' => array('text' => 'Projects', 'url' => 'unknown.php'),
    'contact' => array('text' => 'Contact', 'url' => 'contact.php'),
);
?>

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
                <a href="/projects.php"
                    <?php if ($_SERVER['SCRIPT_NAME'] == "/projects.php") { ?>
                        class="active"
                    <?php } ?>>
                    Projects
                </a>
            </li>
            <li>
                <a href="kanban.zosand.fr">
                    <?php echo $_SERVER['SERVER_NAME'] ?>
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
