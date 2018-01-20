<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [
        "default"   => [
            "title"      => "Default theme",
            "class"      => "",
            "stylesheets" => [
                "css/custom.min.css"
            ]
        ],

        "separator0" => "------------------------------------------------",

        "Base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/style.min.css"
            ]
        ],

        "Custom"     =>  [
            "title"      => "Custom theme",
            "class"      => "light",
            "stylesheets" => [
                "css/custom.min.css"
            ]
        ],
    ]
];
