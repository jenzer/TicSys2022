<?php

$eventlist = array();

include_once 'resources/eventlist.php';

foreach ($eventlist as $anEvent) {
    echo "<div class=\"event-info\">\n";
    echo "<h2>{$anEvent['title']}</h2>\n";
    echo "<h3>{$anEvent['date']}</h3>\n";
    echo "<p>{$anEvent['description']}</p>\n";
    echo "</div>\n";
}

