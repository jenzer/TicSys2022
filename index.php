﻿<!doctype html>
<?php
include_once 'config/config.php';
?>
<html lang="de">
    <head>
        <title>TicSys</title>
        <meta name="description" content="TicSys ist eine Applikation zum Vertrieb von Event-Eintrittskarten.">
        <meta name="author" content="Marc Jenzer">
        <link rel="stylesheet" type="text/css" href="/css/modern-normalize.css">
        <link rel="stylesheet" type="text/css" href="/css/application.css">
    </head>
    <body>

        <div id="wrap">
            <div id="header">
                <div id="logo">
                    <a href="/home"><img src="/images/logo-white.png" alt="TicSys Logo" width="295" height="70"/></a>
                </div>
            </div>

            <div id="menu">
                <ul>
                    <?php
                    $menu = array(
                        URI_HOME => 'Home',
                        URI_EVENTS => 'Events',
                        URI_FAQ => 'FAQ',
                        URI_KONTAKT => 'Kontakt'
                    );
                    foreach ($menu as $href => $title) {
                        $liContent = $title;
                        if ($href != strtolower($_SERVER['REQUEST_URI'])) {
                            $liContent = "<a href=\"$href\">$title</a>";
                        }
                        echo "<li>$liContent</li>\n";
                    }
                    ?>
                </ul>
            </div>

            <div id="content">
                <div class="event-info">
                    <h2>Foo Fighters</h2>
                    <h3>12 Januar 2018</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo ligula eget dolor. Aenean massa.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </p>
                </div>

                <div class="event-info">
                    <h2>Gavin Degraw</h2>
                    <h3>25 Februar 2018</h3>
                    <p>
                        Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero,
                        sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel,
                        luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                        Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.
                        Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                        Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.
                    </p>
                </div>

            </div>

            <div id="footer">
                <p>Copyright &copy; 2017 TicSys, <?php echo date("d.m.Y H:i:s"); ?></p>
            </div>
        </div>
    </body>
</html>