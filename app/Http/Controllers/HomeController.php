<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function create(){
        return "1";
    }
    public function store(){
        return "1";
    }
    public function update($id){
        return "1";
    }
    public function delete($id){
        return "1";
    }
}
