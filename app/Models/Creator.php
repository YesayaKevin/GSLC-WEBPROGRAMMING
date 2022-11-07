<?php

namespace App\Models;

class Creator{
    private static $myIdentity = [
        "title" => "Identity",
        "name" => "Yesaya Kevinedo Delroyvitto",
        "email" => "yesaya.delroyvitto@binus.ac.id",
        "address" => "Komplek Centre Park Blok F no 1, Taman Baloi, Batam Kota."
    ];

    public static function getIdentity(){
        return self::$myIdentity;
    }
}
