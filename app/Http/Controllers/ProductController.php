<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct($id)
    {
        $mainImage = asset('images/pdp/'.$id.'/main-image.png');
        $brandLogo = asset('images/pdp/'.$id.'/brand/brand-1.png');
        switch ($id) {
            case '2':
                $swatchColor = ['black', 'gray', 'purple', 'pink'];
                $productName = "Sweatshirt 'Essentials'";
                break;
            case '3':
                $swatchColor = ['black', 'gray', 'mint', 'blue', 'white', 'pink'];
                $productName = "Kids' Classic Lined Clog";
                break;
            default:
                $swatchColor = ['black', 'gray', 'lightblue', 'blue', 'mediumblue', 'darkblue'];
                $productName = "BAGGY DAD WOMEN'S JEANS";

        }

        $swatchImages = [];
        $similarProductImages = [];
        $moreProductImages = [];
        $brandBanner = asset('images/pdp/'.$id.'/brand-banner.png');
        foreach ($swatchColor as $color) {
            $swatchImages[] = [
                'swatch' => asset('images/pdp/'.$id.'/color/'.$color.'.png'),
                'image' => asset('images/pdp/'.$id.'/swatch-image/'.$color.'.png'),
                'label' => $color,
            ];
        }

        for ($i = 0; $i < 2; $i++) {
            $similarProductImages[] = asset('images/pdp/'.$id.'/similar-product.png');
            $moreProductImages[] = asset('images/pdp/'.$id.'/more-product.png');
        }

        return view('pages.pdp', [
            'brandLogo' => $brandLogo,
            'mainImage' => $mainImage,
            'swatchImages' => $swatchImages,
            'moreProductImages' => $moreProductImages,
            'brandBanner' => $brandBanner,
            'similarProductImages' => $similarProductImages,
            'productName' => $productName,
        ]);
    }
}
