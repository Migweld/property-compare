<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $fillable = ['leeds', 'london'];

    public function createSearch($leeds, $london)
    {
    	$leedsJson = json_encode($leeds);
    	$londonJson = json_encode($london);
    	$search = $this->create(['leeds' => $leedsJson, 'london' => $londonJson]);
    	return $search->id;
    }

    public function getSearch($id)
    {
    	return $this->findOrFail($id);
    }
}
