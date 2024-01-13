<?php

if (isset($_REQUEST['file'])) {
    // file name
    $filename = $_REQUEST['file'];
    $file_path = './upload/' . $_REQUEST['namefolder'];
    // Location
    $location = './upload/' . $_REQUEST['namefolder'] . '/' . $filename;
    $response = 0;

    if (file_exists($location)) {
    unlink($location);
    $response = 1;
    }


    echo $response;
    exit;
}
