<?php

namespace App\Models;

class About {
    private static $member = [
        [
            "name" => "Beomgyu",
            "nationality" => "Korea",
            "image" => "beomgyu.jpg"
        ],

        [
            "name" => "Taehyun",
            "nationality" => "Korea",
            "image" => "taehyun.jpg"
        ],

        [
            "name" => "Sana",
            "nationality" => "Japan",
            "image" => "sana.jpg"
        ],

        [
            "name" => "Eunha",
            "nationality" => "Korea",
            "image" => "eunha.jpg"
        ],

        [
            "name" => "Taehyung",
            "nationality" => "Korea",
            "image" => "btsV.jpg"
        ],

        [
            "name" => "Yeonjun",
            "nationality" => "Korea",
            "image" => "txtyeonjun.jpg"
        ],

        [
            "name" => "Soobin",
            "nationality" => "Korea",
            "image" => "txtsoobin.jpg"
        ],

        [
            "name" => "Hueningkai",
            "nationality" => "Korea",
            "image" => "txthyuka.jpg"
        ],
    ];

    public static function all() {
        return collect(self::$member);
    }
}