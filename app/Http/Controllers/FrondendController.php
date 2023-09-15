<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrondendController extends Controller
{
    //
public function index(){
return view('layouts.index');
}
public function app(){
    return view('layouts.app');
    }
    public function sidebar(){
        return view('includes.sidebar');
        }
        public function welcome(){
            return view('home');
            }
            public function forms(){
                return view('forms');
                }
}
