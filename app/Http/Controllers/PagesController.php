<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index()
   {
        return view('Pages.Home');
   }
    public function About()
   {
        return view('Pages.About');
   }
  
}
