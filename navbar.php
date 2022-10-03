<header>
    <nav class="navbar">
        <?php
        $menu = array(
            'About' => array('text' => 'About me', 'url' => 'index.php'),
            'gallery' => array('text' => 'Projects', 'url' => 'unknown.php'),
            'contact' => array('text' => 'Contact', 'url' => 'contact.php'),
        );
        $html = "<ul>";
        foreach ($menu as $menuItem) {
            $html .= "<li>";
            $html .= "<a href='{$menuItem['url']}'";
            if ($_SERVER['SCRIPT_NAME'] == $menuItem['url']) {
                $html .= " class='active'";
            }
            $html .= ">";
            $html .= "{$menuItem['text']}";
            $html .= "</a>";
            $html .= "</li>";
        }
        $html .= "</ul>";
        ?>
    </nav>
</header>
