<?php

class Menu
{
    public static function renderMenu($page_number)
    {
        $pages = [
            1=>'Start',
            2=>'About',
            3=>'Top List'
        ];

        foreach ($pages as $key => $value)
        {
            echo "<li class=\"menu__li menu__li_selected\"><a href=\"index.php?page=$key\">$value</a></li>";
        }
    }
}