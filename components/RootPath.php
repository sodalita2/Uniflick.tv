<?php 
    $break_url = explode("uniflick", $_SERVER['REQUEST_URI'])[1];
    $countNesting = substr_count($break_url, "/");

    switch ($countNesting) {

        case 1:
            $root = ".";
            break;
        case 2:
            $root = "..";
            break;
        case 3:
            $root = "...";
            break;
    }
?>