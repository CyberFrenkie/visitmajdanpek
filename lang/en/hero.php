<?php

return [

  'controls' => [
    'prev' => [
      'class' => 'carousel-control-prev',
      'slide' => 'prev',
      'label' => 'Previous',
    ],

    'next' => [
      'class' => 'carousel-control-next',
      'slide' => 'next',
      'label' => 'Next',
    ],
  ],

  'slides' => [
    'slide1' => [
      'class' => 'carousel-item active',

      'img' => [
        'class' => 'img-fluid h-100vh',
        'src' => 'img/hero/default-img.png',
        'alt' => 'First slide',
      ],

      'text' => [
        'class' => 'carousel-caption center',

        'title' => [
          'class' => 'title',
          'text' => 'Title1',
        ],

        'lead' => [
          'class' => 'lead',
          'text' => 'Lorem ipsum dolor sit amet.',
        ],
      ],
    ],

    'slide2' => [
      'class' => 'carousel-item',

      'img' => [
        'class' => 'img-fluid h-100vh',
        'src' => 'img/hero/default-img.png',
        'alt' => 'Second slide',
      ],

      'text' => [
        'class' => 'carousel-caption center',

        'title' => [
          'class' => 'title',
          'text' => 'Title2',
        ],

        'lead' => [
          'class' => 'lead',
          'text' => 'Lorem ipsum dolor sit amet.',
        ],
      ],
    ],
  ],

];