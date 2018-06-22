<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function contact()
    {
        return view('pages.contact');
    }
    public function list()
    {
        return view('pages.list');
    }
    public function bid()
    {
        return view('pages.bid');
    }

}
