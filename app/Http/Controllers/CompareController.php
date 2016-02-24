<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\PropertySearch;
use App\Search;

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

    public function compare(PropertySearch $search, Search $searchmodel)
    {
    	$leeds = $search->doSearch($this->request->all(), 'Leeds', 2);
        $london = $search->doSearch($this->request->all(), 'London', 5);

        if($leeds == false || $london == false){
            return view('compare-form')->with('message', 'Could not retrieve any listings. We may have hit the API rate limit');
        }

        $searchresult = $searchmodel->createSearch($leeds, $london);

    	return view('compare-results', compact('leeds', 'london', 'searchresult'));
    }

    public function retrieveSearch($id, Search $search)
    {
        $result = $search->getSearch($id);

        if($result instanceof Illuminate\Database\Eloquent\ModelNotFoundException) {
            return view('compare-form')->with('message', 'Could not find that listing. It may have been deleted');
        } else {
            $leeds = json_decode($result->leeds);
            $london = json_decode($result->london);
            $searchresult = $result->id;

            return view('compare-results', compact('leeds', 'london', 'searchresult'));
        }
    }
}
