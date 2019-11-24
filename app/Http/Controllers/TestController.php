<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Contact($name){
        echo "Je suis $name";
    }
}
