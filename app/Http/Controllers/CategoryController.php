<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory($id)
    {
        $brandBanner = asset('images/plp/'.$id.'/banner.png');
        $productImages = [];

        switch ($id) {
            case '2':
                $name = 'Skincare & Makeup';
                $productId = 4;
                $productNames = [
                    [
                        'name' => 'Hydrating Cleanser Bar',
                        'brand' => 'CERAVE'
                    ],
                    [
                        'name' => ' Cheeks Out Freestyle Cream Blush',
                        'brand' => 'FENTY'
                    ],
                    [
                        'name' => 'Hydrating Foaming Oil Cleanser',
                        'brand' => 'CERAVE'
                    ],
                    [
                        'name' => 'Hydrating Hyaluronic Acid Serum',
                        'brand' => 'CERAVE'
                    ],
                    [
                        'name' => 'Gloss Bomb Heat Universal Lip Luminizer + Plumper',
                        'brand' => 'FENTY'
                    ],
                    [
                        'name' => 'Argan Hydrating Moisturiser – 100Ml',
                        'brand' => 'UNCOVER'
                    ],
                    [
                        'name' => 'Moisturizing Cream',
                        'brand' => 'CERAVE'
                    ],
                    [
                        'name' => 'Essentials Skincare Kit',
                        'brand' => 'UNCOVER'
                    ],
                    [
                        'name' => 'Skin Renewing Vitamin C Serum',
                        'brand' => 'CERAVE'
                    ],
                    [
                        'name' => 'Ultra-Light Gel Moisturizer',
                        'brand' => 'CERAVE'
                    ],
                ];
                $subCategories = [
                    'All',
                    'Skincare',
                    'Make up'
                ];
                $currentSubCategories = 0;
                $numberProductImage = 10;
                $brandName = 'CERAVE';
                $haveSwatchOptions = false;
                break;
            case '3':
                $name = 'Mom jeans';
                $productId = 1;
                $productNames = [
                    [
                        'name' => 'Product’s name',
                        'brand' => 'Brand’s name'
                    ],
                    [
                        'name' => 'Product’s name',
                        'brand' => 'Brand’s name'
                    ],
                    [
                        'name' => 'Product’s name',
                        'brand' => 'Brand’s name'
                    ],
                    [
                        'name' => 'Product’s name',
                        'brand' => 'Brand’s name'
                    ],
                    [
                        'name' => 'Product’s name',
                        'brand' => 'Brand’s name'
                    ],
                    [
                        'name' => 'Product’s name',
                        'brand' => 'Brand’s name'
                    ]
                ];
                $subCategories = [
                    'All',
                    'Skinny fit',
                    'Wide leg',
                    'Mom jeans'
                ];
                $currentSubCategories = 3;
                $numberProductImage = 6;
                $brandName = 'Brand’s name';
                $haveSwatchOptions = true;
                break;
            default:
                $name = 'Clothing';
                $productId = 1;
                $productNames = [
                    [
                        'name' => 'Product’s name',
                        'brand' => 'Brand’s name'
                    ],
                    [
                        'name' => 'Product’s name',
                        'brand' => 'Brand’s name'
                    ],
                    [
                        'name' => 'Product’s name',
                        'brand' => 'Brand’s name'
                    ],
                    [
                        'name' => 'Product’s name',
                        'brand' => 'Brand’s name'
                    ],
                    [
                        'name' => 'Product’s name',
                        'brand' => 'Brand’s name'
                    ],
                    [
                        'name' => 'Product’s name',
                        'brand' => 'Brand’s name'
                    ]
                ];
                $subCategories = [
                    'All',
                    'Skinny fit',
                    'Wide leg',
                    'Mom jeans'
                ];
                $currentSubCategories = 0;
                $numberProductImage = 6;
                $brandName = 'Brand’s name';
                $haveSwatchOptions = true;
        }

        for ($i = 1; $i <= $numberProductImage; $i++) {
            $productImages[$i] = asset('images/plp/'.$id.'/product'.$i.'.png');
        }

        return view('pages.category-page', [
            'brandBanner' => $brandBanner,
            'productImages' => $productImages,
            'name' => $name,
            'productNames' => $productNames,
            'brandName' => $brandName,
            'haveSwatchOptions' => $haveSwatchOptions,
            'subCategories' => $subCategories,
            'currentSubCategories' => $currentSubCategories,
            'productId' => $productId,
        ]);
    }
}
