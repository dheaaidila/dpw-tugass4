<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showhome(){
        return view('frontview.home');
    }

    function showabout(){
        return view('frontview.about');
    }

    function showcontact(){
        return view('frontview.contact');
    }

    function showcollection(){
        return view('frontview.collection');
    }

    function showsingle_page(){
        return view('frontview.single_page');
    }

    function showlogin(){
        return view('frontview.login');
    }

    function showdashboard(){
        return view('BackView.dashboard');
    }

    function showkategori(){
        return view('BackView.kategori');
    }

    function showsupplier(){
        return view('BackView.supplier');
    }

    function showcolegan(){
        return view('BackView.colegan');
    }

    function showproduct2(){
        return view('BackView.product2');
    }

    function showpromo(){
        return view('BackView.promo');
    }

    function showuser(){
        return view('BackView.user');
    }
}
