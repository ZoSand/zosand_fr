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

                    <i class="fa-thin fa-person"></i>
                    About Me
                </a>
            </li>
            <!-- TODO: projects -->
            <li>
                <a
                    href="contact.php"
                    <?php if ($_SERVER['SCRIPT_NAME'] == "/contact.php") { ?>
                        class="active"
                    <?php } ?>>
                    <i class="fa-sharp fa-solid fa-address-book"></i>
                    Contact
                </a>
            </li>
        </ul>
    </nav>
</header>
