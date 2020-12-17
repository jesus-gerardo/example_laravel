<?php

namespace App\Http\Controllers\publico;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller{
    public function index(){
        return view('publico.main');
    }
}
