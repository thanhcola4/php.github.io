<?php

namespace App\Http\Controllers\gamepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function terraria(){
        return view ('page.mobilepage.terraria');
    }
    public function stardewvalley(){
        return view ('page.mobilepage.Stardewvalley');
    }
    public function broforce(){
        return view ('page.mobilepage.broforce');
    }
    public function ws4(){
        return view ('page.mobilepage.ws4');
    }
}
