<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function me()
    {
        return
        [
            "NIS" => 3103118111,
            "Name" => "Rafie Dinantyo Adi",
            "Gender" => "Laki-laki",
            "Phone" => 082136038950,
            "Class" => "XII RPL 4",

        ];
    }
}