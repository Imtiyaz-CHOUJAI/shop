<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use League\Fractal\Resource\ResourceAbstract;
use App\Shop;

class ShopsTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Shop $shop) : array
    {
        return [
	        'id'          => (int) $shop->id,
	        'name'        => $shop->name,
            'description' => (int)$shop->description,
	        'distance'    => (int) $shop->distance,
	    ];
    }
}
