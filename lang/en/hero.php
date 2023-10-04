<?php

return [

  'controls' => [
    'prev' => [
      'class' => 'carousel-control-prev',
      'slide' => 'prev',
      'label' => 'Previous',
      'icon' => 'carousel-control-prev-icon',
    ],

    'next' => [
      'class' => 'carousel-control-next',
      'slide' => 'next',
      'label' => 'Next',
      'icon' => 'carousel-control-next-icon',
    ],
  ],

  'slides' => [
    [
      'class' => 'carousel-item active',

      'img' => [
        'class' => 'img-fluid h-100vh',
        'src' => 'img/hero/default-img.png',
        'alt' => 'First slide',
      ],

      'vid' => [
        'class' => 'img-fluid h-100vh',
        'src' => 'img/content/video/majdanpek.mp4',
        'alt' => 'First slide',
      ],

      'text' => [
        'class' => 'carousel-caption center',
        'link' => '/about-majdanpek',
        'title' => [
          'class' => 'title',
          'text' => 'U srcu',
        ],

        'lead' => [
          'class' => 'lead',
          'text' => 'Majdanpek',
        ],
        'cta'=> [
          'class' => 'cta',
          'text' => 'Pročitaj više',
        ],
      ],
    ],
    [
      'class' => 'carousel-item',

      'img' => [
        'class' => 'img-fluid h-100vh',
        'src' => 'img/hero/default-img.png',
        'alt' => 'First slide',
      ],

      'vid' => [
        'class' => 'img-fluid h-100vh',
        'src' => 'img/content/video/milanovac.mp4',
        'alt' => 'First slide',
      ],

      'text' => [
        'class' => 'carousel-caption center',
        'link' => '/',

        'title' => [
          'class' => 'title',
          'text' => 'Preko brda',
        ],

        'lead' => [
          'class' => 'lead',
          'text' => 'Donji Milanovac',
        ],
          'cta'=> [
          'class' => 'cta',
          'text' => 'Pročitaj više',
        ],
      ],
    ],
    [
      'class' => 'carousel-item',

      'img' => [
        'class' => 'img-fluid h-100vh',
        'src' => 'img/hero/default-img.png',
        'alt' => 'Lepenski vir',
      ],

      'vid' => [
        'class' => 'img-fluid h-100vh',
        'src' => 'img/content/video/lepenskiVir.mp4',
        'alt' => 'Lepenski vir',
      ],

      'text' => [
        'class' => 'carousel-caption center',
        'link' => '/sight/8',
        'title' => [
          'class' => 'title',
          'text' => 'Arheolosko nalaziste',
        ],

        'lead' => [
          'class' => 'lead',
          'text' => 'Lepenski vir',
        ],
          'cta'=> [
          'class' => 'cta',
          'text' => 'Pročitaj više',
        ],
      ],
    ],
  ],
];