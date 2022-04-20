<?php

namespace App\Models;
// Data belum dari database
class Contact
{
    private static $member_contact = [
        [
            "name" => "Beomgyu",
            "email" => "txt.beomgyu@bighitmusic.com",
            "contact" => "+8263063163"
        ],

        [
            "name" => "Taehyun",
            "email" => "txt.taehyun@bighitmusic.com",
            "contact" => "+8235213210"
        ],

        [
            "name" => "Sana",
            "email" => "twice.sana@jyp.com",
            "contact" => "+8214725023"
        ],

        [
            "name" => "Eunha",
            "email" => "viviz.eunha@bpm.com",
            "contact" => "+8271274841"
        ],

        [
            "name" => "Taehyung",
            "email" => "bts.taehyung@bighitmusic.com",
            "contact" => "+821055538203"
        ],

        [
            "name" => "Yeonjun",
            "email" => "txt.yeonjun@bighitmusic.com",
            "contact" => "+821055570582"
        ],

        [
            "name" => "Soobin",
            "email" => "txt.soobin@bighitmusic.com",
            "contact" => "+82105557458"
        ],

        [
            "name" => "Hueningkai",
            "email" => "txt.hueningkai@bighitmusic.com",
            "contact" => "+8217695123"
        ],
    ];

    public static function showContact() {
        return collect(self::$member_contact);
    }
}
