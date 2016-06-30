<?php

namespace DymaVDomeNet\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use DymaVDomeNet\Http\Requests;
use DymaVDomeNet\Chimney;
use Nicolaslopezj\Searchable\SearchableTrait;

class ChimneysController extends Controller
{
    public function index()
    {
        Session::put('type', 'chimneys');

        return view('chimneys.index');
    } 
    
    public function catalog()
    {
        return view('chimneys.catalog');
    } 

    public function showByType($type)
    {
        $chimneys = Chimney::whereType($type)->orderBy('created_at', 'desc')->paginate(10);

        return view('chimneys.showByType', compact('type', 'chimneys'));
    }

    public function show($type, Chimney $chimney)
    {
        return view('chimneys.show', compact('type', 'chimney'));
    }

    public function prices($type)
    {
        $prices = Price::whereType($type)->get(); 
        return view('chimneys.prices', compact('prices')); 
    }

    public function search(Request $request)
    {
        $chimneys = Chimney::search($request->queryString)->get();
        $searchCount    = count($chimneys);

        return view('chimneys.showByType', compact('chimneys', 'searchCount'));
    }
}
