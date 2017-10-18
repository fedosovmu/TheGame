<?php

class Content
{
    public static function getPage($number)
    {
        $pages = [
            1=>'start.html',
            2=>'about.html',
            3=>'top-list.html'
        ];

        $path = 'assets/'. $pages[$number];
        echo file_get_contents($path);
    }
}
