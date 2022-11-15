<?php
namespace App\http\Controllers\Home;
use App\http\Controllers\Controller;


class aproposController extends Controller
{
    public function apropos() {
        return view('Home/apropos');
    }
}