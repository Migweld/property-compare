<?php

namespace App\Services;

use App\Services\Contracts\SearchAPIContract;
use GuzzleHttp\Client;

class ZooplaSearch implements SearchAPIContract
{
    
    public function __construct()
    {
        $this->api = getenv('ZOOPLA_KEY');
        $this->url = getenv('ZOOPLA_URL');
        $this->caller = new Client(['base_uri' => getenv('ZOOPLA_URL')]);
    }

    public function callAPI($bedrooms, $propertyType, $saleRent, $town, $radius)
    {
        switch ($saleRent) {
            case 'sale':
                $minPrice = 100000;
            break;
            case 'rent':
                $minPrice = 150;
            break;
        }

        $response = $this->caller->get('property_listings.json', [
            'query' => [
                'api_key'           => $this->api,
                'radius'            => $radius,
                'area'              => $town,
                'minimum_price'     => $minPrice,
                'listing_status'    => $saleRent,
                'minimum_beds'      => $bedrooms,
                'maximum_beds'      => $bedrooms,
                'property_type'     => $propertyType,
                'page_size'         => 100
            ]
        ]);

        if($response->getStatusCode() == 200){
            return json_decode($response->getBody()->getContents());
        } else {
            return false;
        }
    }
}