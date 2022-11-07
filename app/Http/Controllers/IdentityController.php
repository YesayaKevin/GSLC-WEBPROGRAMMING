<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdentityController extends Controller
{
    public function index(){
        return view('identity', [
            "title" => "Identity",
            "name" => "Yesaya Kevinedo Delroyvitto",
            "email" => "yesaya.delroyvitto@binus.ac.id",
            "address" => "Komplek Centre Park Blok F no 1, Taman Baloi, Batam Kota."
        ]);
    }
}
