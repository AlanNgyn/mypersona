<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory($id)
    {
        $brandBanner = asset('images/plp/'.$id.'/banner.png');
        $productImages = [];

        for ($i = 1; $i <= 6; $i++) {
            $productImages[$i] = asset('images/plp/'.$id.'/product'.$i.'.png');
        }

        switch ($id) {
            case '2': $name = 'Skincare & Makeup'; break;
            default: $name = 'Clothing';
        }

        return view('pages.category-page', [
            'brandBanner' => $brandBanner,
            'productImages' => $productImages,
            'name' => $name,
        ]);
    }
}
