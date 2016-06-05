<?php

namespace DymaVDomeNet\Http\Controllers;

use Illuminate\Http\Request;
use DymaVDomeNet\Http\Requests;
use DymaVDomeNet\Chimney;

class ChimneysController extends Controller
{
    public function index()
    {
        return view('chimneys.index');
    } 

    public function showByType($type)
    {
        $chimneys = Chimney::whereType($type)->get();

        return view('chimneys.showByType', compact('chimneys'));
    }

    public function prices($type)
    {
        $prices = Price::whereType($type)->get();

        return view('chimneys.prices', compact('prices')); 
    }
}
