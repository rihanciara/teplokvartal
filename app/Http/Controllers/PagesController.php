<?php

namespace DymaVDomeNet\Http\Controllers;

use Illuminate\Http\Request;

use DymaVDomeNet\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.main');
    } 

    public function contact()
    {
        return view('pages.contact');
    }

    public function docs()
    {
        return view('pages.docs');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function articles()
    {
        return view('pages.articles');
    }

    public function partners()
    {
        return view('pages.partners');
    }
}