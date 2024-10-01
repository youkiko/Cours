<?php

function change_color($color)
{
    // Set up shell colors
    $foreground_colors = [
        'black' => '0;30',
        'dark_gray' => '1;30',
        'blue' => '0;34',
        'light_blue' => '1;34',
        'green' => '0;32',
        'light_green' => '1;32', // AINSI
        'cyan' => '0;36',
        'light_cyan' => '1;36',
        'red' => '0;31',
        'light_red' => '1;31',
        'purple' => '0;35',
        'light_purple' => '1;35',
        'brown' => '0;33',
        'yellow' => '1;33',
        'light_gray' => '0;37',
        'white' => '1;37'
    ];
    $couleur = "\033[0m";
    foreach ($foreground_colors as $cle => $en_cours) {
        if (strtolower($color) == $cle) {
            $couleur = "\033[" . $en_cours . "m";
            break;
        }
    }
    echo ($couleur);
}