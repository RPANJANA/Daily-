<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function index($user){
        echo"Hello from controller";
        echo $user;
    }
}
