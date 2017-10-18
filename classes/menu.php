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
            If ($page_number == $key)
                $status = "menu__li_selected";
            else
                $status = "";
            echo "<li class=\"menu__li $status\"><a href=\"index.php?page=$key\">$value</a></li>";
        }
    }
}