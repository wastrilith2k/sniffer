<?php

// Get URL from request
    $url = urldecode($_GET['url']);
// Call PhantomJS script to load page and return requests
    $results = array();
    $scan = 'phantomjs snifftest.js ' . $url;
    exec($scan, $results); 
// Return output
    print implode(",",$results);

