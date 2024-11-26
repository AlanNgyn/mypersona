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
                $productNames = [
                    'Hydrating Cleanser Bar',
                    'Hydrating Facial Cleanser',
                    'Hydrating Foaming Oil Cleanser',
                    'Hydrating Hyaluronic Acid Serum',
                    'Hydrating Mineral Sunscreen SPF 30 Face Sheer Tint',
                    'Hydrating Toner',
                    'Moisturizing Cream',
                    'Skin Renewing Eye Cream',
                    'Skin Renewing Vitamin C Serum',
                    'Ultra-Light Gel Moisturizer'
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
                $productNames = [
                    'Product’s name ',
                    'Product’s name ',
                    'Product’s name ',
                    'Product’s name ',
                    'Product’s name ',
                    'Product’s name ',
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
                $productNames = [
                    'Product’s name ',
                    'Product’s name ',
                    'Product’s name ',
                    'Product’s name ',
                    'Product’s name ',
                    'Product’s name ',
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
            'currentSubCategories' => $currentSubCategories
        ]);
    }
}
