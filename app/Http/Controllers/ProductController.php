<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct($id)
    {
        switch ($id) {
            case '2':
                $hasSwatchColor = true;
                $swatchColor = ['black', 'gray', 'purple', 'pink'];
                $productName = "Sweatshirt 'Essentials'";
                $productId = 2;
                break;
            case '3':
                $hasSwatchColor = true;
                $swatchColor = ['black', 'gray', 'mint', 'blue', 'white', 'pink'];
                $productName = "Kids' Classic Lined Clog";
                $productId = 3;
                break;
            case '4':
                $hasSwatchColor = false;
                $swatchColor = [];
                $productName = "Fenty Skin Start’rs Full-Size Bundle";
                $productId = 4;
                break;
            default:
                $hasSwatchColor = true;
                $swatchColor = ['black', 'gray', 'lightblue', 'blue', 'mediumblue', 'darkblue'];
                $productName = "BAGGY DAD WOMEN'S JEANS";
                $productId = 1;

        }

        $mainImage = asset('images/pdp/'.$productId.'/main-image.png');
        $brandLogo = asset('images/pdp/'.$productId.'/brand/brand-1.png');

        $swatchImages = [];
        $similarProductImages = [];
        $moreProductImages = [];
        $brandBanner = asset('images/pdp/'.$productId.'/brand-banner.png');
        foreach ($swatchColor as $color) {
            $swatchImages[] = [
                'swatch' => asset('images/pdp/'.$productId.'/color/'.$color.'.png'),
                'image' => asset('images/pdp/'.$productId.'/swatch-image/'.$color.'.png'),
                'label' => $color,
            ];
        }

        for ($i = 0; $i < 2; $i++) {
            $similarProductImages[] = asset('images/pdp/'.$productId.'/similar-product.png');
            $moreProductImages[] = asset('images/pdp/'.$productId.'/more-product.png');
        }

        return view('pages.pdp', [
            'brandLogo' => $brandLogo,
            'mainImage' => $mainImage,
            'swatchImages' => $swatchImages,
            'moreProductImages' => $moreProductImages,
            'brandBanner' => $brandBanner,
            'similarProductImages' => $similarProductImages,
            'productName' => $productName,
            'hasSwatchColor' => $hasSwatchColor,
        ]);
    }
}
