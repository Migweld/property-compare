<?php

namespace App\Services\Contracts;

Interface SearchAPIContract
{
	public function callAPI($bedrooms, $propertyType, $saleRent, $town, $radius);
}