<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function home() {
        return view('home');
    }
    public function product() {
        return view('product');
    }
    public function about() {
        return view('about-us');
    }
    public function contact() {
        return view('contact-us');
    }
    public function news() {
        return view('news');
    }
    public function welcome() {
        return view('welcome');
    }
}