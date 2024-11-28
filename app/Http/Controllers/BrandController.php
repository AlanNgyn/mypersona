<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function getBrand($id)
    {
        $banner = asset('images/brand/'.$id.'/banner.png');
        $logo = asset('images/brand/'.$id.'/logo.png');
        switch ($id) {
            case '1':
                $title = 'Adidas';
                $products = [
                    [
                        'name' => 'Baby Set',
                        'price' => '₦ 44.741,40',
                        'productId' => 2
                    ],
                    [
                        'name' => 'Bralette Bikini Hills Hiker Allover Print',
                        'price' => '',
                        'productId' => 2
                    ],
                    [
                        'name' => 'Dress Adicolor Classics Summer',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Mules Adilette 22',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Sneakers Superstar',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Sweatshirt Neucl',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Wide leg Pants Adicolor Neuclassics',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'Bralette Active Swimsuit in Salmon',
                        'price' => '',
                        'productId' => 2,
                    ]
                ];
                $imageType = '.png';

                $numberProductImage = 9;

                break;

            case '2':
                $title = 'ALDO';
                $products = [
                    [
                        'name' => 'Braymond Chelsea boot',
                        'price' => '₦ 44.741,40',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'BREA',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'CANTBRINGMEDOWN',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'HARRIOT',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'HARRIOT',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'HEARTSTEP',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'INDERPAUL',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'LUIGIA',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Maybellie-wc',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'SPELLBINDING',
                        'price' => '',
                        'productId' => 3,
                    ],
                ];
                $imageType = '.jpeg';
                $numberProductImage = 10;
                break;

            case '3':
                $title = 'ASHLUXE';
                $products = [
                    [
                        'name' => 'Crest logo Polo',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 's Le Maestro Tee',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Boxing Trunk',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => '3 in 1 Female Briefs',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Crest Snapback',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Customisable Bathing Robe',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Cycling Jerseyv',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Hockey Jersey',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Neo Logo Hoodie',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Threaded Tank Top',
                        'price' => '',
                        'productId' => 2,
                    ]
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '4':
                $title = 'BOSS';
                $products = [
                    [
                        'name' => 'Knit Cardigan Fadenasi',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Knitted dress C Furner',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Knitted dress Ferdola',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'DOUBLE-BREASTED COAT',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'DRESSLETIC SLIM-FIT JACKET',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'FAUX-TEDDY SHOULDER BAG',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'LEATHER CHELSEA BOOTS',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'REGULAR-FIT SUIT',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'SLIM-FIT SHIRT',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'SLIM-FIT TROUSERS',
                        'price' => '',
                        'productId' => 2,
                    ]
                ];
                $imageType = '.jpeg';
                $numberProductImage = 10;
                break;

            case '5':
                $title = 'CERAVE';
                $products = [
                    [
                        'name' => 'Hydrating Cleanser Bar',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Hydrating Facial Cleanser',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Hydrating Foaming Oil Cleanser',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Hydrating Hyaluronic Acid Serum',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Hydrating Mineral Sunscreen SPF 30 Face Sheer Tint',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Hydrating Toner',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Moisturizing Cream',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Skin Renewing Eye Cream',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Skin Renewing Vitamin C Serum',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Ultra-Light Gel Moisturizer',
                        'price' => '',
                        'productId' => 4,
                    ]
                ];
                $imageType = '.jpeg';
                $numberProductImage = 10;
                break;

            case '6':
                $title = 'CHARLES TYRWHITT';
                $products = [
                    [
                        'name' => 'Combination Braces',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Cutaway Collar Non-Iron Twill Shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Grain Leather Derby Brogue Rubber Sole Shoe',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Merino Shawl Neck Chunky Cardigan',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Merino Zip Neck Jumper',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Natural Stretch Twill Suit',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Patent Oxford Shoes',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'The Lions Hybrid Gilet',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Ultimate Non-Iron Chinos',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Zip-Neck Jersey Polo',
                        'price' => '',
                        'productId' => 2,
                    ]
                ];
                $imageType = '.jpeg';
                $numberProductImage = 10;
                break;

            case '7':
                $title = 'CLARKS';
                $products = [
                    [
                        'name' => 'Cologne Up Knee High Boot',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Desert Trek',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Foxing Beep Toddler',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Foxing Truck Toddler',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Hearth Kaylie Ankle Boot',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Kyndall Iris',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Relda Glow Kid',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Relda Spark Kid',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Ultimate Non-Iron Chinos',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Zip-Neck Jersey Polo',
                        'price' => '',
                        'productId' => 3,
                    ]
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '8':
                $title = 'CROCS';
                $products = [
                    [
                        'name' => 'BAYA PLATFORM CLOG',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'CLASSIC PRINTED CLOG',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'CLASSIC SHAGGY FUR LINED CLOG',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'CRUSH CLOG',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'FORTNITE X CROCS 5 PACK JIBBITZ',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'FORTNITE X CROCS STOMP LINED CLOG CUDDLE TEAM LEADER',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'CLASSIC LINED CLOG',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'MEGA CRUSH MATTE SANDAL',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'STOMP SHORTY BOOT',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'WEDNESDAY STOMP CLOG',
                        'price' => '',
                        'productId' => 3,
                    ]
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '9':
                $title = 'DEJIANDKOLA';
                $products = [
                    [
                        'name' => 'A “Manity” Trad X',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'A Chocolate Brown, Arewa Embroidery Traditional Agbada',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'A porcelain, connected medulla and wooven pattern embroidery detailing hat',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Navy Blue, Deltagbada Flapper Embroidery Details Agbada',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Sweet Heart Neck, Sheer Embellished Lace Tulle Trim Gown-Dress',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'The “AVT6” Suit',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'The “Iroko” Agbada',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'The “Rings & Snap 1864” Suit',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'The Red Moscow Hat',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'The unaltered Suit 2',
                        'price' => '',
                        'productId' => 2,
                    ]
                ];
                $imageType = '.jpeg';
                $numberProductImage = 10;
                break;

            case '10':
                $title = 'FENTY';
                $products = [
                    [
                        'name' => 'Cheeks Out Freestyle Cream Blush',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Eaze Drop Blurring Skin Tint',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Flyliner Longwear Liquid Eyeliner',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Gloss Bomb Heat Universal Lip Luminizer + Plumper',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Gloss Bomb Universal Lip Luminizer',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Pro Filt R Soft Matte Powder Foundation',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Stunna Lip Paint Longwear Fluid Lip Color',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Skin Butta Drop Whipped Oil Body Cream Refill',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Fat Water Pore-Refining Toner Serum',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Hydra Vizor Invisible Moisturizer SPF 30',
                        'price' => '',
                        'productId' => 4,
                    ]
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '11':
                $title = 'HIGH FASHION BY JOL';
                $products = [
                    [
                        'name' => 'FLEECE HOODIE PANTS',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'FLEECE HOODIE SHORTS – PINK',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'FLEECE HOODIE TOP',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'HF BOULEVARD NORTH TEE',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'HF HUNTER BEANIE',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'HF JEAN FEMALE JACKET',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'HF NORTHERN KNOT TEE',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'HF PANEL CAP',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'HF RACER TOP',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'HF VELOUR TRACKSUIT PANTS',
                        'price' => '',
                        'productId' => 1,
                    ]
                ];
                $imageType = '.jpeg';
                $numberProductImage = 10;
                break;

            case '12':
                $title = 'KILENTAR';
                $products = [
                    [
                        'name' => 'Abu Wide Leg Pants',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Ase Ruffle Mini Skirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Efe Orange Beaded Maxi Dress',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Gbemi Ruffle Maxi Skirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Igba Hoop Earrings',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Iwole Tie-Dye Ruffle Maxi Sk',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Joyo Meje Corset Top',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Joyo Meje Pink Corset Top',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Mami Beaded Halter Neck Maxi Dress',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Valco Slip Dresss',
                        'price' => '',
                        'productId' => 2,
                    ]
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '13':
                $title = 'LACOSTE';
                $products = [
                    [
                        'name' => 'Children’s T-Clip Leather Sneakers',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Double Sided Cotton Pique Oversized Polo Shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Kid’s Regular Fit Petit Pique Polo Shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Tennis Short Pleated Elastic Waist Skirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Graphic Pattern Swimsuit Top',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Lora Small Leather Bag',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Regular Fit Contrast Collar Poplin Shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Stretch Cotton Pique Polo Dress',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Sport X Novak Djokovic Microfiber Cap',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Unisex Heavy Knit Badge Tennis Sweater',
                        'price' => '',
                        'productId' => 2,
                    ],
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '14':
                $title = 'LEVI’S';
                $products = [
                    [
                        'name' => 'Premium 90S TRUCKER JACKET',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Premium 578™ BAGGY MEN’S JEANS',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'BAGGY DAD WOMEN’S JEANS',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'Premium RIBCAGE BELL WOMEN’S JEANS',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'Premium VINTAGE WOMEN’S OVERALLS',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'LOGO T-SHIRT LITTLE GIRLS',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'PULL ON JEGGINGS TODDLER GIRLS',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'POTRERO DENIM HOODIE JACKET',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'TRUCKER JACKET',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'XL STRAIGHT WOMEN’S JEANS',
                        'price' => '',
                        'productId' => 1,
                    ],
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '15':
                $title = 'MAC';
                $products = [
                    [
                        'name' => 'Connect In Colour Eye Shadow Palette - Embedded in Burgundy',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Gilded Glamour Best-Sellers Trio',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Lipglass',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'SHEERTONE BLUSH',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Squirt Plumping Gloss Stick',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'FIX+ STAY OVER ALCOHOL-FREE 24HR SETTING SPRAY',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'M·A·CXIMAL SILKY MATTE LIPSTICK',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'M·A·CXIMAL SILKY MATTE LIPSTICK',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Studio Radiance Serum-Powered™ Foundation',
                        'price' => '',
                        'productId' => 4,
                    ],
                ];
                $imageType = '.png';
                $numberProductImage = 9;
                break;

            case '16':
                $title = 'MANGO';
                $products = [
                    [
                        'name' => 'Asymmetrical heeled shoes',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Beaded pendant earrings',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Cotton-knit jumpsuit',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'Cotton-knit romper',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'Degraded knitted sweater',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'Halter-neck lurex knitted top',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Knitted sweater with squared structure',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Shopper bag with buckle',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Strapless lurex dress',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Two-tone lingerie dress',
                        'price' => '',
                        'productId' => 2,
                    ],
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '17':
                $title = 'MAYBELLINE';
                $products = [
                    [
                        'name' => 'Baby Lips® Lip Makeup Crystal Moisturizing Lip Balm',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Instant Age Rewind® Eraser',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Lash Sensational Firework Washable Mascara Makeup',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Lash Sensational Sky High®',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Lifter Gloss® Lip Gloss Makeup With Hyaluronic Acid',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Lifter Liner Lip Liner Makeup with Hyaluronic Acid',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Lifter Stix Multi-Use Face Stick',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Master Precise® All Day Liquid Eyeliner Makeup',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Super Stay® Up To 24Hr Hybrid Powder-Foundation',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Super Stay® Vinyl Ink Longwear Liquid Lipcolor',
                        'price' => '',
                        'productId' => 4,
                    ],
                ];
                $imageType = '.jpeg';
                $numberProductImage = 10;
                break;

            case '18':
                $title = 'NARS';
                $products = [
                    [
                        'name' => 'Air Matte Lip Color',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Duo Eyeshadow',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Explicit Lipstick',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Eyeliner Pencil',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Light Reflecting™ Quad Eyeshadow',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'ONLINE EXCLUSIVE Lipstick',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Orgasm Thrills Lip & Cheek Set',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Powermatte High-Intensity Lip Pencil',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Powermatte Lip Pigment',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Radiant Creamy Concealer',
                        'price' => '',
                        'productId' => 4,
                    ],
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '19':
                $title = 'NIKE';
                $products = [
                    [
                        'name' => 'Jordan 5-Piece Core Gift Set',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Naomi Osaka',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Ready, Set',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Air Force 1  - 07 LX',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Vapor 16 Pro Mercurial Dream Speed',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Nike One',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'Nike Shox TL',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Nike Solo Swoosh',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Nike Sportswear Tech Fleece Windrunner',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Nike Universa',
                        'price' => '',
                        'productId' => 2,
                    ],
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '20':
                $title = 'ONLY';
                $products = [
                    [
                        'name' => 'CARLEOLIA Quilted gilet',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'JDYGEGGO Mid waist Wide Leg Fit Wide leg trousers',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'KMGKAREN Knitted cardigan',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'ONLALMA Short dress',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'ONLEDIE Denim jacket',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'ONLELISA-1 Boots',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'ONLEMILY High waist Straight Fit Jeans',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'ONLHEATHER Denim jacket',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'ONLLIMA Scarf',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'ONLLYON Plissé skirt',
                        'price' => '',
                        'productId' => 1,
                    ],
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '21':
                $title = 'ORANGE CULTURE';
                $products = [
                    [
                        'name' => 'Amaka shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Casj Easy Shift Dress',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Casj Lami Dress',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Casj Sisi Eko Crop Shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Casj Faces Shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Casj Orange Heart Flare Pants',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'Casj Pink Crop Top',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Casj Sisi Skirt',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'Lami Robe',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Mena Blazer',
                        'price' => '',
                        'productId' => 2,
                    ],
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '22':
                $title = 'POPWAVE';
                $products = [
                    [
                        'name' => 'Swag demon belt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Swag demon double layer black tee',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Swag demon shorts',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'Wicked wave all red tee',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Wicked wave girls dress',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Wicked wave girls tank top',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Wicked wave quaterback tee',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Wicked wave zipper hoodie',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Slimeball jersey',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Swag demon polo',
                        'price' => '',
                        'productId' => 2,
                    ],
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '23':
                $title = 'PUMA';
                $products = [
                    [
                        'name' => 'CA PRO x Davido',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Iconic T7 Women’s Baby Tee',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Regular Workout Pants',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'Skinny Workout Pants',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'Sneakers Cabana Racer',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Sweatsuit Minicats',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Swim Women’s V-Neck Cross-back Swimsuit',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Women’s Crop Top',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Women’s Skirt',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'PUMA x Davido Archive Track Jacket',
                        'price' => '',
                        'productId' => 2,
                    ],
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '24':
                $title = 'SEVERE NATURE';
                $products = [
                    [
                        'name' => 'Cayenne mesh long sleeve t-shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Motosport Blue Jersey',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Racer leather pants',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'Daytona Longsleeve T-Shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Girl Racer Vest',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Motosport Black Track Jacket',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Racer Button-down black shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'SN Dakar Tank Top',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'S-star Desire white crop top',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Superman White T-shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '25':
                $title = 'SKETCHERS';
                $products = [
                    [
                        'name' => 'Kid’s Uno - Retro-Squad',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Men’s Relaxed Fit Sergeants - Thaxter',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'GO GOLF 600 Sandal',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Slip-ins Work - Tilido - Ombray',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Slip-ins - Summits - Dazzling Haze',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Waterproof Relaxed Fit - Respected - Ivar',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Arch Fit Arcade - Arcata',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Cypress - Bold Move',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Slip-ins - BOBS Sport Squad Chaos - Seize The Hour',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Slip-ins - GO GOLF Arch Fit - Line Up',
                        'price' => '',
                        'productId' => 3,
                    ],
                ];
                $imageType = '.jpeg';
                $numberProductImage = 10;
                break;

            case '26':
                $title = 'TOMMY HILFIGER';
                $products = [
                    [
                        'name' => 'Dark Wash Wide Leg Jeans',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'Hilfiger Monotype V-Neck Lounge Hoody',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Logo Crew Neck T-Shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Oversized Denim Trucker Jacket',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Soft Leather Convertible Crossbody Bag',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Underwear Swimsuit',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Tommy Jeans Crossbody Bag',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Smart Casual Wool Rich Coat',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'TH Essential Cover Up Beach Shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Warm Lined Hybrid Snow Boots',
                        'price' => '',
                        'productId' => 3,
                    ],
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '27':
                $title = 'UNCOVER';
                $products = [
                    [
                        'name' => 'Aloe Invisible Sunscreen – 80Ml',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Argan Hydrating Moisturiser – 100Ml',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Baobab Glow-C Serum (Vitamin-C) – 30Ml',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Essentials Skincare Kit',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Glow and Protect Duo',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Green Tea Blemish Control Serum (Acne Control) – 30Ml',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Green Tea Revitalising Cleanser – 120Ml',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'I Am Spotless Pimple Patch – 18 Patches',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'On The Go Kit',
                        'price' => '',
                        'productId' => 4,
                    ],
                    [
                        'name' => 'Rooibos Glow Toner – 125Ml',
                        'price' => '',
                        'productId' => 4,
                    ],
                ];
                $imageType = '.jpeg';
                $numberProductImage = 10;
                break;

            case '28':
                $title = 'WAFFLESNCREAM';
                $products = [
                    [
                        'name' => 'Basic Skorts',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Basic Tote bag',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Block work Ijebu Bucket Hat',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Lady of Lourdes Shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Lagos Island Bottoms',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Orisa Tee',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Orisha Tee',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'St. Rita Crop Shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'waf. Deck',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'waf.Coke WOZZAAH Hockey Jersey',
                        'price' => '',
                        'productId' => 2,
                    ],
                ];
                $imageType = '.png';
                $numberProductImage = 10;
                break;

            case '29':
                $title = 'YOMI CASUAL';
                $products = [
                    [
                        'name' => 'YC-009',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'YC-010',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'YC-013',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'YC-022',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'YC-024',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'YC-025',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'YC-026',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'YCN-002',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'YCN-005',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'YCN-007',
                        'price' => '',
                        'productId' => 1,
                    ],
                ];
                $imageType = '.jpeg';
                $numberProductImage = 10;
                break;

            default:
                $title = 'Adidas';
                $products = [
                    [
                        'name' => 'Baby Set',
                        'price' => '₦ 44.741,40',
                        'productId' => 2
                    ],
                    [
                        'name' => 'Bralette Bikini Hills Hiker Allover Print',
                        'price' => '',
                        'productId' => 2
                    ],
                    [
                        'name' => 'Dress Adicolor Classics Summer',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Mules Adilette 22',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Shirt',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Sneakers Superstar',
                        'price' => '',
                        'productId' => 3,
                    ],
                    [
                        'name' => 'Sweatshirt Neucl',
                        'price' => '',
                        'productId' => 2,
                    ],
                    [
                        'name' => 'Wide leg Pants Adicolor Neuclassics',
                        'price' => '',
                        'productId' => 1,
                    ],
                    [
                        'name' => 'Bralette Active Swimsuit in Salmon',
                        'price' => '',
                        'productId' => 2,
                    ]
                ];
                $imageType = '.png';
                $numberProductImage = 9;
        }
        for ($i = 1; $i <= $numberProductImage; $i++) {
            $productImages[$i] = asset('images/brand/'.$id.'/product-image'.$i.$imageType);
        }
        $productImage = asset('images/brand/'.$id.'/product-image.png');

        return view('pages.brand', [
            'title' => $title,
            'banner' => $banner,
            'productImages' => $productImages,
            'products' => $products,
            'logo' => $logo,
        ]);
    }
}
