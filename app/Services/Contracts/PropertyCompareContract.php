<?php

namespace App\Services\Contracts;

Interface PropertyCompareContract
{
	public function doSearch($input, $town, $radius);
}