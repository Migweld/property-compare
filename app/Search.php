<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $fillable = ['leeds', 'london', 'sale_or_rent'];

    public function createSearch($leeds, $london, $rent)
    {
    	$leedsJson = json_encode($leeds);
    	$londonJson = json_encode($london);
    	$search = $this->create(['leeds' => $leedsJson, 'london' => $londonJson, 'sale_or_rent' => $rent]);
    	return $search->id;
    }

    public function getSearch($id)
    {
    	return $this->findOrFail($id);
    }
}
