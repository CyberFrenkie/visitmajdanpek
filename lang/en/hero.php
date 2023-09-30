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

        'title' => [
          'class' => 'title',
          'text' => 'U srcu',
        ],

        'lead' => [
          'class' => 'lead',
          'text' => 'Majdanpek',
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

        'title' => [
          'class' => 'title',
          'text' => 'Preko brda',
        ],

        'lead' => [
          'class' => 'lead',
          'text' => 'Donji Milanovac',
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

        'title' => [
          'class' => 'title',
          'text' => 'Arheolosko nalaziste',
        ],

        'lead' => [
          'class' => 'lead',
          'text' => 'Lepenski vir',
        ],
      ],
    ],
  ],
];