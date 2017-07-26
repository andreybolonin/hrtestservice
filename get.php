<?php

if ($_GET['format'] == 'csv') {
    $sql = 'SELECT sum(count), any(country) FROM hrterstservice.event GROUP BY country ORDER BY created_at DESC LIMIT 7';
    //format to csv
    return;
}

if ($_GET['format'] == 'json') {
    $sql = 'SELECT sum(count), any(country) FROM hrterstservice.event GROUP BY country ORDER BY created_at DESC LIMIT 7';
    //format to csv
    return;
}