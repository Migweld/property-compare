<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\PropertySearch;

class CompareController extends Controller
{
    
    public function __construct(Request $request)
    {
    	$this->request = $request;
    }


    // Display the comparison form
    public function index()
    {
    	return view('compare-form');
    }

    public function compare(PropertySearch $search)
    {
    	$leeds = $search->doSearch($this->request->all(), 'Leeds', 2);
        $london = $search->doSearch($this->request->all(), 'London', 5);

    	return view('compare-results', compact('leeds', 'london'));
    }
}
