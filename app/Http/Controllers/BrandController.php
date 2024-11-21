<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function getBrand($id)
    {
        $banner = asset('images/brand/'.$id.'/banner.png');
        switch ($id) {
            case '1':
                $title = 'Adidas';
                break;

            case '2':
                $title = 'ALDO';
                break;

            case '3':
                $title = 'ASHLUXE';
                break;

            case '4':
                $title = 'BOSS';
                break;

            case '5':
                $title = 'CERAVE';
                break;

            case '6':
                $title = 'CHARLES TYRWHITT';
                break;

            case '7':
                $title = 'CLARKS';
                break;

            case '8':
                $title = 'CROCS';
                break;

            case '9':
                $title = 'DEJIANDKOLA';
                break;

            case '10':
                $title = 'FENTY';
                break;

            case '11':
                $title = 'HIGH FASHION BY JOL';
                break;

            case '12':
                $title = 'KILENTAR';
                break;

            case '13':
                $title = 'LACOSTE';
                break;

            case '14':
                $title = 'LEVI’S';
                break;

            case '15':
                $title = 'MAC';
                break;

            case '16':
                $title = 'MANGO';
                break;

            case '17':
                $title = 'MAYBELLINE';
                break;

            case '18':
                $title = 'NARS';
                break;

            case '19':
                $title = 'NIKE';
                break;

            case '20':
                $title = 'ONLY';
                break;

            case '21':
                $title = 'ORANGE CULTURE';
                break;

            case '22':
                $title = 'POPWAVE';
                break;

            case '23':
                $title = 'PUMA';
                break;

            case '24':
                $title = 'SEVERE NATURE';
                break;

            case '25':
                $title = 'SKETCHERS';
                break;

            case '26':
                $title = 'TOMMY HILFIGER';
                break;

            case '27':
                $title = 'UNCOVER';
                break;

            case '28':
                $title = 'WAFFLESNCREAM';
                break;

            case '29':
                $title = 'YOMI CASUAL';
                break;

            default:
                $title = 'Role not recognized. Please contact support.';
                break;
        }

        return view('pages.brand', [
            'title' => $title,
            'banner' => $banner,
        ]);
    }
}
