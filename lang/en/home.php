<?php

return [

    'article' => [
        [
            'heading' => 'Inspiracija za vaše sledeće putovanje',

            'paragraph' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aspernatur alias veniam neque ratione beatae cupiditate fuga. 
                            Voluptatum iste est, facere, quis iusto, 
                            magnam non rem nostrum magni obcaecati quisquam sit.',  
            
            'btn' => [
                [
                    'img' => 'img/content/homepage/emergency.jpg',
                    'text' => 'Ustanove od značaja',
                    'link' => '/institutions',
                ],    
                [
                    'img' => 'img/content/homepage/hotel.jpg',
                    'text' => 'Smeštaj',
                    'link' => '/hotels',
                ],   
                [
                    'img' => 'img/content/homepage/bus2.jpg',
                    'text' => 'Prevoz',
                    'link' => '/transportation',
                ],
            ]
        ]
    ],
    
    'hero' => [
        'carousel' => [
            'indicators' => [
                [
                    'class' => 'active', 
                    'label' => 'Slide 1'
                ],
                
                [
                    'class' => '', 
                    'label' => 'Slide 2'
                ],
                [
                    'class' => '', 
                    'label' => 'Slide 3'
                ],
            ],

            'controls' => [    
                'prev' => [
    
                    'class' => 'carousel-control-prev',
                    'icon' => 'carousel-control-prev-icon',
                    'label' => 'Previous',
                    'slide' => 'prev', 
    
                ],

                'next' => [
    
                    'class' => 'carousel-control-next',
                    'icon' => 'carousel-control-next-icon',
                    'label' => 'Next',
                    'slide' => 'next', 
    
                ],
            ],
    
            'image' => [
    
                'src' => 'img/hero/default-img.png',
                'class' => 'd-block w-100 h-100',
                'alt' => 'Carousel Image',
    
            ],

            'slides' => [
                [
                    'title' => 'Preporučujemo',
                    'text' => 'Prepoznajte destinaciju iz snova!',
                    'button_text' => 'Pročitaj više',
                    'button_class' => 'btn slide-btn',
                ],
                [
                    'title' => 'Popularno',
                    'text' => 'Prepoznajte destinaciju iz snova!',
                    'button_text' => 'Pročitaj više',
                    'button_class' => 'btn slide-btn',
                ],
                [
                    'title' => 'Manje poznato',
                    'text' => 'Prepoznajte destinaciju iz snova!',
                    'button_text' => 'Pročitaj više',
                    'button_class' => 'btn slide-btn',
                ],
            ],
        ],
    ],
   
    'news' => [
        [
            'heading' => 'Novosti',
            'paragraph' => 'Da li ste i dalje u potrazi za idealnom destinacijom?',
    
            'btn' => [
                [
                    'text' => 'Pročitaj sve članke',
                    'link' => '/',
                ],
            ],   
    
            'content' => [
                [
                    'img' => 'img/content/content.png',        
                    'head' => 'header',
        
                    'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aspernatur alias veniam neque ratione beatae cupiditate fuga. 
                            Voluptatum iste est, facere, quis iusto, 
                            magnam non rem nostrum magni obcaecati quisquam sit.',

                    'link' => '/',
                ],                
                [
                    'img' => 'img/content/content.png',        
                    'head' => 'header',
        
                    'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aspernatur alias veniam neque ratione beatae cupiditate fuga. 
                            Voluptatum iste est, facere, quis iusto, 
                            magnam non rem nostrum magni obcaecati quisquam sit.',

                    'link' => '/',
                ],                
                [
                    'img' => 'img/content/content.png',        
                    'head' => 'header',
        
                    'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aspernatur alias veniam neque ratione beatae cupiditate fuga. 
                            Voluptatum iste est, facere, quis iusto, 
                            magnam non rem nostrum magni obcaecati quisquam sit.',

                    'link' => '/',
                ],
            ],
        ]
    ],  
];
