<?php

namespace App\Services;

use App\Services\Contracts\PropertyCompareContract;
use App\Services\SearchAPIContract;
use GuzzleHttp\Exception\BadResponseException;

/**
 * summary
 */
class PropertySearch implements PropertyCompareContract
{

    public function doSearch($input, $town, $radius)
    {
    	$propertyType = strip_tags($input['property_type']);
    	$bedrooms = strip_tags($input['bedrooms']);
        $saleRent = strip_tags($input['sale_or_rent']);

    	return $this->searchAPI($propertyType, $bedrooms, $saleRent, $town, $radius);
    }

    private function searchAPI($propertyType, $bedrooms, $saleRent, $town, $radius)
    {
        try {
            $search = new ZooplaSearch;
            $response = $search->callAPI($bedrooms, $propertyType, $saleRent, $town, $radius);

            if($response == false) {
                return false;
            }

            if(count($response->listing <= 10)){
                $listing = $response->listing[rand(0, count($response->listing))];
            } else {
                $chunks = array_slice($response->listing, 10, count($response->listing));
                $listing = $chunks[rand(0, count($chunks))];
            }

            return $listing;
        } catch(BadResponseException $e) {
            return $e;
        }
    }
}