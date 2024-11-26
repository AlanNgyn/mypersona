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
                $products = [
                    [
                        'name' => 'Baby Set',
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Bralette Bikini Hills Hiker Allover Print',
                        'price' => ''
                    ],
                    [
                        'name' => 'Dress Adicolor Classics Summer',
                        'price' => ''
                    ],
                    [
                        'name' => 'Mules Adilette 22',
                        'price' => ''
                    ],
                    [
                        'name' => 'Shirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'Sneakers Superstar',
                        'price' => ''
                    ],
                    [
                        'name' => 'Sweatshirt Neucl',
                        'price' => ''
                    ],
                    [
                        'name' => 'Wide leg Pants Adicolor Neuclassics',
                        'price' => ''
                    ],
                    [
                        'name' => 'Bralette Active Swimsuit in Salmon',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'BREA',
                        'price' => ''
                    ],
                    [
                        'name' => 'CANTBRINGMEDOWN',
                        'price' => ''
                    ],
                    [
                        'name' => 'HARRIOT',
                        'price' => ''
                    ],
                    [
                        'name' => 'HARRIOT',
                        'price' => ''
                    ],
                    [
                        'name' => 'HEARTSTEP',
                        'price' => ''
                    ],
                    [
                        'name' => 'INDERPAUL',
                        'price' => ''
                    ],
                    [
                        'name' => 'LUIGIA',
                        'price' => ''
                    ],
                    [
                        'name' => 'Maybellie-wc',
                        'price' => ''
                    ],
                    [
                        'name' => 'SPELLBINDING',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 's Le Maestro Tee',
                        'price' => ''
                    ],
                    [
                        'name' => 'Boxing Trunk',
                        'price' => ''
                    ],
                    [
                        'name' => '3 in 1 Female Briefs',
                        'price' => ''
                    ],
                    [
                        'name' => 'Crest Snapback',
                        'price' => ''
                    ],
                    [
                        'name' => 'Customisable Bathing Robe',
                        'price' => ''
                    ],
                    [
                        'name' => 'Cycling Jerseyv',
                        'price' => ''
                    ],
                    [
                        'name' => 'Hockey Jersey',
                        'price' => ''
                    ],
                    [
                        'name' => 'Neo Logo Hoodie',
                        'price' => ''
                    ],
                    [
                        'name' => 'Threaded Tank Top',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Knitted dress C Furner',
                        'price' => ''
                    ],
                    [
                        'name' => 'Knitted dress Ferdola',
                        'price' => ''
                    ],
                    [
                        'name' => 'DOUBLE-BREASTED COAT',
                        'price' => ''
                    ],
                    [
                        'name' => 'DRESSLETIC SLIM-FIT JACKET',
                        'price' => ''
                    ],
                    [
                        'name' => 'FAUX-TEDDY SHOULDER BAG',
                        'price' => ''
                    ],
                    [
                        'name' => 'LEATHER CHELSEA BOOTS',
                        'price' => ''
                    ],
                    [
                        'name' => 'REGULAR-FIT SUIT',
                        'price' => ''
                    ],
                    [
                        'name' => 'SLIM-FIT SHIRT',
                        'price' => ''
                    ],
                    [
                        'name' => 'SLIM-FIT TROUSERS',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Hydrating Facial Cleanser',
                        'price' => ''
                    ],
                    [
                        'name' => 'Hydrating Foaming Oil Cleanser',
                        'price' => ''
                    ],
                    [
                        'name' => 'Hydrating Hyaluronic Acid Serum',
                        'price' => ''
                    ],
                    [
                        'name' => 'Hydrating Mineral Sunscreen SPF 30 Face Sheer Tint',
                        'price' => ''
                    ],
                    [
                        'name' => 'Hydrating Toner',
                        'price' => ''
                    ],
                    [
                        'name' => 'Moisturizing Cream',
                        'price' => ''
                    ],
                    [
                        'name' => 'Skin Renewing Eye Cream',
                        'price' => ''
                    ],
                    [
                        'name' => 'Skin Renewing Vitamin C Serum',
                        'price' => ''
                    ],
                    [
                        'name' => 'Ultra-Light Gel Moisturizer',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Cutaway Collar Non-Iron Twill Shirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'Grain Leather Derby Brogue Rubber Sole Shoe',
                        'price' => ''
                    ],
                    [
                        'name' => 'Merino Shawl Neck Chunky Cardigan',
                        'price' => ''
                    ],
                    [
                        'name' => 'Merino Zip Neck Jumper',
                        'price' => ''
                    ],
                    [
                        'name' => 'Natural Stretch Twill Suit',
                        'price' => ''
                    ],
                    [
                        'name' => 'Patent Oxford Shoes',
                        'price' => ''
                    ],
                    [
                        'name' => 'The Lions Hybrid Gilet',
                        'price' => ''
                    ],
                    [
                        'name' => 'Ultimate Non-Iron Chinos',
                        'price' => ''
                    ],
                    [
                        'name' => 'Zip-Neck Jersey Polo',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Desert Trek',
                        'price' => ''
                    ],
                    [
                        'name' => 'Foxing Beep Toddler',
                        'price' => ''
                    ],
                    [
                        'name' => 'Foxing Truck Toddler',
                        'price' => ''
                    ],
                    [
                        'name' => 'Hearth Kaylie Ankle Boot',
                        'price' => ''
                    ],
                    [
                        'name' => 'Kyndall Iris',
                        'price' => ''
                    ],
                    [
                        'name' => 'Relda Glow Kid',
                        'price' => ''
                    ],
                    [
                        'name' => 'Relda Spark Kid',
                        'price' => ''
                    ],
                    [
                        'name' => 'Ultimate Non-Iron Chinos',
                        'price' => ''
                    ],
                    [
                        'name' => 'Zip-Neck Jersey Polo',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'CLASSIC PRINTED CLOG',
                        'price' => ''
                    ],
                    [
                        'name' => 'CLASSIC SHAGGY FUR LINED CLOG',
                        'price' => ''
                    ],
                    [
                        'name' => 'CRUSH CLOG',
                        'price' => ''
                    ],
                    [
                        'name' => 'FORTNITE X CROCS 5 PACK JIBBITZ',
                        'price' => ''
                    ],
                    [
                        'name' => 'FORTNITE X CROCS STOMP LINED CLOG CUDDLE TEAM LEADER',
                        'price' => ''
                    ],
                    [
                        'name' => 'CLASSIC LINED CLOG',
                        'price' => ''
                    ],
                    [
                        'name' => 'MEGA CRUSH MATTE SANDAL',
                        'price' => ''
                    ],
                    [
                        'name' => 'STOMP SHORTY BOOT',
                        'price' => ''
                    ],
                    [
                        'name' => 'WEDNESDAY STOMP CLOG',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'A Chocolate Brown, Arewa Embroidery Traditional Agbada',
                        'price' => ''
                    ],
                    [
                        'name' => 'A porcelain, connected medulla and wooven pattern embroidery detailing hat',
                        'price' => ''
                    ],
                    [
                        'name' => 'Navy Blue, Deltagbada Flapper Embroidery Details Agbada',
                        'price' => ''
                    ],
                    [
                        'name' => 'Sweet Heart Neck, Sheer Embellished Lace Tulle Trim Gown-Dress',
                        'price' => ''
                    ],
                    [
                        'name' => 'The “AVT6” Suit',
                        'price' => ''
                    ],
                    [
                        'name' => 'The “Iroko” Agbada',
                        'price' => ''
                    ],
                    [
                        'name' => 'The “Rings & Snap 1864” Suit',
                        'price' => ''
                    ],
                    [
                        'name' => 'The Red Moscow Hat',
                        'price' => ''
                    ],
                    [
                        'name' => 'The unaltered Suit 2',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Eaze Drop Blurring Skin Tint',
                        'price' => ''
                    ],
                    [
                        'name' => 'Flyliner Longwear Liquid Eyeliner',
                        'price' => ''
                    ],
                    [
                        'name' => 'Gloss Bomb Heat Universal Lip Luminizer + Plumper',
                        'price' => ''
                    ],
                    [
                        'name' => 'Gloss Bomb Universal Lip Luminizer',
                        'price' => ''
                    ],
                    [
                        'name' => 'Pro Filt R Soft Matte Powder Foundation',
                        'price' => ''
                    ],
                    [
                        'name' => 'Stunna Lip Paint Longwear Fluid Lip Color',
                        'price' => ''
                    ],
                    [
                        'name' => 'Skin Butta Drop Whipped Oil Body Cream Refill',
                        'price' => ''
                    ],
                    [
                        'name' => 'Fat Water Pore-Refining Toner Serum',
                        'price' => ''
                    ],
                    [
                        'name' => 'Hydra Vizor Invisible Moisturizer SPF 30',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'FLEECE HOODIE SHORTS – PINK',
                        'price' => ''
                    ],
                    [
                        'name' => 'FLEECE HOODIE TOP',
                        'price' => ''
                    ],
                    [
                        'name' => 'HF BOULEVARD NORTH TEE',
                        'price' => ''
                    ],
                    [
                        'name' => 'HF HUNTER BEANIE',
                        'price' => ''
                    ],
                    [
                        'name' => 'HF JEAN FEMALE JACKET',
                        'price' => ''
                    ],
                    [
                        'name' => 'HF NORTHERN KNOT TEE',
                        'price' => ''
                    ],
                    [
                        'name' => 'HF PANEL CAP',
                        'price' => ''
                    ],
                    [
                        'name' => 'HF RACER TOP',
                        'price' => ''
                    ],
                    [
                        'name' => 'HF VELOUR TRACKSUIT PANTS',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Ase Ruffle Mini Skirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'Efe Orange Beaded Maxi Dress',
                        'price' => ''
                    ],
                    [
                        'name' => 'Gbemi Ruffle Maxi Skirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'Igba Hoop Earrings',
                        'price' => ''
                    ],
                    [
                        'name' => 'Iwole Tie-Dye Ruffle Maxi Sk',
                        'price' => ''
                    ],
                    [
                        'name' => 'Joyo Meje Corset Top',
                        'price' => ''
                    ],
                    [
                        'name' => 'Joyo Meje Pink Corset Top',
                        'price' => ''
                    ],
                    [
                        'name' => 'Mami Beaded Halter Neck Maxi Dress',
                        'price' => ''
                    ],
                    [
                        'name' => 'Valco Slip Dresss',
                        'price' => ''
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
                        'price' => '₦ 122.430,30'
                    ],
                    [
                        'name' => 'Double Sided Cotton Pique Oversized Polo Shirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'Kid’s Regular Fit Petit Pique Polo Shirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'Tennis Short Pleated Elastic Waist Skirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'Graphic Pattern Swimsuit Top',
                        'price' => ''
                    ],
                    [
                        'name' => 'Lora Small Leather Bag',
                        'price' => ''
                    ],
                    [
                        'name' => 'Regular Fit Contrast Collar Poplin Shirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'Stretch Cotton Pique Polo Dress',
                        'price' => ''
                    ],
                    [
                        'name' => 'Sport X Novak Djokovic Microfiber Cap',
                        'price' => ''
                    ],
                    [
                        'name' => 'Unisex Heavy Knit Badge Tennis Sweater',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Premium 578™ BAGGY MEN’S JEANS',
                        'price' => ''
                    ],
                    [
                        'name' => 'BAGGY DAD WOMEN’S JEANS',
                        'price' => ''
                    ],
                    [
                        'name' => 'Premium RIBCAGE BELL WOMEN’S JEANS',
                        'price' => ''
                    ],
                    [
                        'name' => 'Premium VINTAGE WOMEN’S OVERALLS',
                        'price' => ''
                    ],
                    [
                        'name' => 'LOGO T-SHIRT LITTLE GIRLS',
                        'price' => ''
                    ],
                    [
                        'name' => 'PULL ON JEGGINGS TODDLER GIRLS',
                        'price' => ''
                    ],
                    [
                        'name' => 'POTRERO DENIM HOODIE JACKET',
                        'price' => ''
                    ],
                    [
                        'name' => 'TRUCKER JACKET',
                        'price' => ''
                    ],
                    [
                        'name' => 'XL STRAIGHT WOMEN’S JEANS',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Gilded Glamour Best-Sellers Trio',
                        'price' => ''
                    ],
                    [
                        'name' => 'Lipglass',
                        'price' => ''
                    ],
                    [
                        'name' => 'SHEERTONE BLUSH',
                        'price' => ''
                    ],
                    [
                        'name' => 'Squirt Plumping Gloss Stick',
                        'price' => ''
                    ],
                    [
                        'name' => 'FIX+ STAY OVER ALCOHOL-FREE 24HR SETTING SPRAY',
                        'price' => ''
                    ],
                    [
                        'name' => 'M·A·CXIMAL SILKY MATTE LIPSTICK',
                        'price' => ''
                    ],
                    [
                        'name' => 'M·A·CXIMAL SILKY MATTE LIPSTICK',
                        'price' => ''
                    ],
                    [
                        'name' => 'Studio Radiance Serum-Powered™ Foundation',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Beaded pendant earrings',
                        'price' => ''
                    ],
                    [
                        'name' => 'Cotton-knit jumpsuit',
                        'price' => ''
                    ],
                    [
                        'name' => 'Cotton-knit romper',
                        'price' => ''
                    ],
                    [
                        'name' => 'Degraded knitted sweater',
                        'price' => ''
                    ],
                    [
                        'name' => 'Halter-neck lurex knitted top',
                        'price' => ''
                    ],
                    [
                        'name' => 'Knitted sweater with squared structure',
                        'price' => ''
                    ],
                    [
                        'name' => 'Shopper bag with buckle',
                        'price' => ''
                    ],
                    [
                        'name' => 'Strapless lurex dress',
                        'price' => ''
                    ],
                    [
                        'name' => 'Two-tone lingerie dress',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Instant Age Rewind® Eraser',
                        'price' => ''
                    ],
                    [
                        'name' => 'Lash Sensational Firework Washable Mascara Makeup',
                        'price' => ''
                    ],
                    [
                        'name' => 'Lash Sensational Sky High®',
                        'price' => ''
                    ],
                    [
                        'name' => 'Lifter Gloss® Lip Gloss Makeup With Hyaluronic Acid',
                        'price' => ''
                    ],
                    [
                        'name' => 'Lifter Liner Lip Liner Makeup with Hyaluronic Acid',
                        'price' => ''
                    ],
                    [
                        'name' => 'Lifter Stix Multi-Use Face Stick',
                        'price' => ''
                    ],
                    [
                        'name' => 'Master Precise® All Day Liquid Eyeliner Makeup',
                        'price' => ''
                    ],
                    [
                        'name' => 'Super Stay® Up To 24Hr Hybrid Powder-Foundation',
                        'price' => ''
                    ],
                    [
                        'name' => 'Super Stay® Vinyl Ink Longwear Liquid Lipcolor',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Duo Eyeshadow',
                        'price' => ''
                    ],
                    [
                        'name' => 'Explicit Lipstick',
                        'price' => ''
                    ],
                    [
                        'name' => 'Eyeliner Pencil',
                        'price' => ''
                    ],
                    [
                        'name' => 'Light Reflecting™ Quad Eyeshadow',
                        'price' => ''
                    ],
                    [
                        'name' => 'ONLINE EXCLUSIVE Lipstick',
                        'price' => ''
                    ],
                    [
                        'name' => 'Orgasm Thrills Lip & Cheek Set',
                        'price' => ''
                    ],
                    [
                        'name' => 'Powermatte High-Intensity Lip Pencil',
                        'price' => ''
                    ],
                    [
                        'name' => 'Powermatte Lip Pigment',
                        'price' => ''
                    ],
                    [
                        'name' => 'Radiant Creamy Concealer',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Naomi Osaka',
                        'price' => ''
                    ],
                    [
                        'name' => 'Ready, Set',
                        'price' => ''
                    ],
                    [
                        'name' => 'Air Force 1  - 07 LX',
                        'price' => ''
                    ],
                    [
                        'name' => 'Vapor 16 Pro Mercurial Dream Speed',
                        'price' => ''
                    ],
                    [
                        'name' => 'Nike One',
                        'price' => ''
                    ],
                    [
                        'name' => 'Nike Shox TL',
                        'price' => ''
                    ],
                    [
                        'name' => 'Nike Solo Swoosh',
                        'price' => ''
                    ],
                    [
                        'name' => 'Nike Sportswear Tech Fleece Windrunner',
                        'price' => ''
                    ],
                    [
                        'name' => 'Nike Universa',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'JDYGEGGO Mid waist Wide Leg Fit Wide leg trousers',
                        'price' => ''
                    ],
                    [
                        'name' => 'KMGKAREN Knitted cardigan',
                        'price' => ''
                    ],
                    [
                        'name' => 'ONLALMA Short dress',
                        'price' => ''
                    ],
                    [
                        'name' => 'ONLEDIE Denim jacket',
                        'price' => ''
                    ],
                    [
                        'name' => 'ONLELISA-1 Boots',
                        'price' => ''
                    ],
                    [
                        'name' => 'ONLEMILY High waist Straight Fit Jeans',
                        'price' => ''
                    ],
                    [
                        'name' => 'ONLHEATHER Denim jacket',
                        'price' => ''
                    ],
                    [
                        'name' => 'ONLLIMA Scarf',
                        'price' => ''
                    ],
                    [
                        'name' => 'ONLLYON Plissé skirt',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Casj Easy Shift Dress',
                        'price' => ''
                    ],
                    [
                        'name' => 'Casj Lami Dress',
                        'price' => ''
                    ],
                    [
                        'name' => 'Casj Sisi Eko Crop Shirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'Casj Faces Shirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'Casj Orange Heart Flare Pants',
                        'price' => ''
                    ],
                    [
                        'name' => 'Casj Pink Crop Top',
                        'price' => ''
                    ],
                    [
                        'name' => 'Casj Sisi Skirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'Lami Robe',
                        'price' => ''
                    ],
                    [
                        'name' => 'Mena Blazer',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Swag demon double layer black tee',
                        'price' => ''
                    ],
                    [
                        'name' => 'Swag demon shorts',
                        'price' => ''
                    ],
                    [
                        'name' => 'Wicked wave all red tee',
                        'price' => ''
                    ],
                    [
                        'name' => 'Wicked wave girls dress',
                        'price' => ''
                    ],
                    [
                        'name' => 'Wicked wave girls tank top',
                        'price' => ''
                    ],
                    [
                        'name' => 'Wicked wave quaterback tee',
                        'price' => ''
                    ],
                    [
                        'name' => 'Wicked wave zipper hoodie',
                        'price' => ''
                    ],
                    [
                        'name' => 'Slimeball jersey',
                        'price' => ''
                    ],
                    [
                        'name' => 'Swag demon polo',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Iconic T7 Women’s Baby Tee',
                        'price' => ''
                    ],
                    [
                        'name' => 'Regular Workout Pants',
                        'price' => ''
                    ],
                    [
                        'name' => 'Skinny Workout Pants',
                        'price' => ''
                    ],
                    [
                        'name' => 'Sneakers Cabana Racer',
                        'price' => ''
                    ],
                    [
                        'name' => 'Sweatsuit Minicats',
                        'price' => ''
                    ],
                    [
                        'name' => 'Swim Women’s V-Neck Cross-back Swimsuit',
                        'price' => ''
                    ],
                    [
                        'name' => 'Women’s Crop Top',
                        'price' => ''
                    ],
                    [
                        'name' => 'Women’s Skirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'PUMA x Davido Archive Track Jacket',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Motosport Blue Jersey',
                        'price' => ''
                    ],
                    [
                        'name' => 'Racer leather pants',
                        'price' => ''
                    ],
                    [
                        'name' => 'Daytona Longsleeve T-Shirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'Girl Racer Vest',
                        'price' => ''
                    ],
                    [
                        'name' => 'Motosport Black Track Jacket',
                        'price' => ''
                    ],
                    [
                        'name' => 'Racer Button-down black shirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'SN Dakar Tank Top',
                        'price' => ''
                    ],
                    [
                        'name' => 'S-star Desire white crop top',
                        'price' => ''
                    ],
                    [
                        'name' => 'Superman White T-shirt',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Men’s Relaxed Fit Sergeants - Thaxter',
                        'price' => ''
                    ],
                    [
                        'name' => 'GO GOLF 600 Sandal',
                        'price' => ''
                    ],
                    [
                        'name' => 'Slip-ins Work - Tilido - Ombray',
                        'price' => ''
                    ],
                    [
                        'name' => 'Slip-ins - Summits - Dazzling Haze',
                        'price' => ''
                    ],
                    [
                        'name' => 'Waterproof Relaxed Fit - Respected - Ivar',
                        'price' => ''
                    ],
                    [
                        'name' => 'Arch Fit Arcade - Arcata',
                        'price' => ''
                    ],
                    [
                        'name' => 'Cypress - Bold Move',
                        'price' => ''
                    ],
                    [
                        'name' => 'Slip-ins - BOBS Sport Squad Chaos - Seize The Hour',
                        'price' => ''
                    ],
                    [
                        'name' => 'Slip-ins - GO GOLF Arch Fit - Line Up',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Hilfiger Monotype V-Neck Lounge Hoody',
                        'price' => ''
                    ],
                    [
                        'name' => 'Logo Crew Neck T-Shirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'Oversized Denim Trucker Jacket',
                        'price' => ''
                    ],
                    [
                        'name' => 'Soft Leather Convertible Crossbody Bag',
                        'price' => ''
                    ],
                    [
                        'name' => 'Underwear Swimsuit',
                        'price' => ''
                    ],
                    [
                        'name' => 'Tommy Jeans Crossbody Bag',
                        'price' => ''
                    ],
                    [
                        'name' => 'Smart Casual Wool Rich Coat',
                        'price' => ''
                    ],
                    [
                        'name' => 'TH Essential Cover Up Beach Shirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'Warm Lined Hybrid Snow Boots',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Argan Hydrating Moisturiser – 100Ml',
                        'price' => ''
                    ],
                    [
                        'name' => 'Baobab Glow-C Serum (Vitamin-C) – 30Ml',
                        'price' => ''
                    ],
                    [
                        'name' => 'Essentials Skincare Kit',
                        'price' => ''
                    ],
                    [
                        'name' => 'Glow and Protect Duo',
                        'price' => ''
                    ],
                    [
                        'name' => 'Green Tea Blemish Control Serum (Acne Control) – 30Ml',
                        'price' => ''
                    ],
                    [
                        'name' => 'Green Tea Revitalising Cleanser – 120Ml',
                        'price' => ''
                    ],
                    [
                        'name' => 'I Am Spotless Pimple Patch – 18 Patches',
                        'price' => ''
                    ],
                    [
                        'name' => 'On The Go Kit',
                        'price' => ''
                    ],
                    [
                        'name' => 'Rooibos Glow Toner – 125Ml',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Basic Tote bag',
                        'price' => ''
                    ],
                    [
                        'name' => 'Block work Ijebu Bucket Hat',
                        'price' => ''
                    ],
                    [
                        'name' => 'Lady of Lourdes Shirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'Lagos Island Bottoms',
                        'price' => ''
                    ],
                    [
                        'name' => 'Orisa Tee',
                        'price' => ''
                    ],
                    [
                        'name' => 'Orisha Tee',
                        'price' => ''
                    ],
                    [
                        'name' => 'St. Rita Crop Shirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'waf. Deck',
                        'price' => ''
                    ],
                    [
                        'name' => 'waf.Coke WOZZAAH Hockey Jersey',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'YC-010',
                        'price' => ''
                    ],
                    [
                        'name' => 'YC-013',
                        'price' => ''
                    ],
                    [
                        'name' => 'YC-022',
                        'price' => ''
                    ],
                    [
                        'name' => 'YC-024',
                        'price' => ''
                    ],
                    [
                        'name' => 'YC-025',
                        'price' => ''
                    ],
                    [
                        'name' => 'YC-026',
                        'price' => ''
                    ],
                    [
                        'name' => 'YCN-002',
                        'price' => ''
                    ],
                    [
                        'name' => 'YCN-005',
                        'price' => ''
                    ],
                    [
                        'name' => 'YCN-007',
                        'price' => ''
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
                        'price' => '₦ 44.741,40'
                    ],
                    [
                        'name' => 'Bralette Bikini Hills Hiker Allover Print',
                        'price' => ''
                    ],
                    [
                        'name' => 'Dress Adicolor Classics Summer',
                        'price' => ''
                    ],
                    [
                        'name' => 'Mules Adilette 22',
                        'price' => ''
                    ],
                    [
                        'name' => 'Shirt',
                        'price' => ''
                    ],
                    [
                        'name' => 'Sneakers Superstar',
                        'price' => ''
                    ],
                    [
                        'name' => 'Sweatshirt Neucl',
                        'price' => ''
                    ],
                    [
                        'name' => 'Wide leg Pants Adicolor Neuclassics',
                        'price' => ''
                    ],
                    [
                        'name' => 'Bralette Active Swimsuit in Salmon',
                        'price' => ''
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
        ]);
    }
}
