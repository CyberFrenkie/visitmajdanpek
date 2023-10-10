<?php
return[
    'list1'=> [
        [
        'list1Values'=> [
            [
                    'text'=>'Lokacija',
                    'url'=>'https://goo.gl/maps/sgbbEVpLpRhyEr6SA',
                    'icon'=>'fa-solid fa-location-dot me-2',
                    'target'=>'#location',
            ],
            [
                    'text'=>'Ruta Autom',
                    'url'=>'https://www.google.com/maps/dir/?api=1&destination=Rajkova+Pecina&travelmode=driving&dir_action=navigate',
                    'icon'=>'fa-solid fa-car me-2',
                    'target'=>'#car-route',
            ],
            [       
                    'text'=>'Ruta peške',
                    'url'=>'https://www.google.com/maps/dir/?api=1&destination=Rajkova+Pecina&travelmode=walking&dir_action=navigate',
                    'icon'=>'fa-solid fa-person-walking me-2',
                    'target'=>'#walk-route',
            ],
        ],
        ],
    ],
        'list2'=> [
        [
        'list2Values'=> [
            [       
                    'outer-text'=>'Radno Vreme: ',
                    'inner-text'=>'7:30-14:30',
                    'url'=>'',
                    'icon'=>'fa-regular fa-clock me-2',
            ],
            [       'outer-text'=>'Kontakt Telefon: ',
                    'inner-text'=>'000-000-0000',
                    'url'=>'',
                    'icon'=>'fa-solid fa-phone-volume me-2',
            ],
            [       'outer-text'=>'Email: ', 
                    'inner-text'=>'exampleemail2@gmail.com',
                    'url'=>'',
                    'icon'=>'fa-regular fa-envelope me-2',
            ],
        ],
        ],
    ],
        'slider' => [
            [
                'sliderValues' => [
                    [
                        'src' => '/img/content/Pecina/pecina (60).jpg',
                    ],
                    [
                        'src' => '/img/content/Pecina/pecina (50).jpg',
                    ],
                    [
                        'src' => '/img/content/content.png',
                    ],
                    
            ]
        ],
    ],
        'arrow-icon' => 'fa-solid fa-arrow-right',
        'locations' => 'Lokacija Znamenitosti',
        'BG-pravac' => 'Pravac Iz Beograda',
        'NG-pravac' => 'Pravac Iz Negotina',
        'Informations' => '<a href="https://www.google.com/maps/dir/?api=1&destination=Rajkova+Pecina&travelmode=driving&dir_action=navigate" target="_blank" class="default">Za vise informacija klikni OVDE<i class="move-arrow fa-solid fa-arrow-right ms-2"></i></a>',
];