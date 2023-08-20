<?php

return [

    'article' => [
        [
            'heading' => 'Inspiration for your next trip',

            'paragraph' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aspernatur alias veniam neque ratione beatae cupiditate fuga. 
                            Voluptatum iste est, facere, quis iusto, 
                            magnam non rem nostrum magni obcaecati quisquam sit.',
            


            
            'btn' => [
                [
                    'img' => 'img/content/content.png',
                    'text' => 'Trending',
                    'link' => '/',
                ],
           
                [
                    'img' => 'img/content/content.png',
                    'text' => 'Featured',
                    'link' => '/',
                ],
           
                [
                    'img' => 'img/content/content.png',
                    'text' => 'Popular locations',
                    'link' => '/',
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
                    'title' => 'Trending',
                    'text' => 'Still searching dream destination?',
                    'button_text' => 'Read more',
                    'button_class' => 'btn slide-btn',
                ],
                [
                    'title' => 'Featured',
                    'text' => 'still searching dream destination?',
                    'button_text' => 'Read more',
                    'button_class' => 'btn slide-btn',
                ],
                [
                    'title' => 'Hotels',
                    'text' => 'Still searching dream destination?',
                    'button_text' => 'Read more',
                    'button_class' => 'btn slide-btn',
                ],
            ],
        ],

    ],
   

];
