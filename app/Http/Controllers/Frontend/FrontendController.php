<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
    	return view('frontend.index');
    }

    public function about()
    {
    	return view('frontend.about');
    }

    public function services()
    {
    	return view('frontend.services');
    }

    public function gallery()
    {
    	return view('frontend.gallery');
    }
}
