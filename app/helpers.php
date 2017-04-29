<?php

if(! function_exists('page_title')) {
    function page_title($title) {
        $base_title = 'Laracarte - List of artisans';

        if($title === '') {
            return $base_title;
        } else {
            return $title . ' | ' . $base_title;
        }
    }
}