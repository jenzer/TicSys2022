<?php
$handle = fopen("{$_SERVER['DOCUMENT_ROOT']}/resources/eventlist.csv", "r");
if ($handle !== false) {
    while(($data = fgetcsv($handle)) !== false) {
        echo "<div class=\"event-info\">\n";
        echo "<h2>{$data[0]}</h2>\n";
        echo "<h3>{$data[1]}</h3>\n";
        echo "<p>{$data[2]}</p>\n";
        echo "</div>\n";
    } 
    fclose($handle);
}
