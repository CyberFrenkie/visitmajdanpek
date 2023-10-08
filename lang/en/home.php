<?php

return [

    'backBtn' => 'Nazad',

    'article' => [
        [
            'heading' => 'Informacije od značaja',
            'paragraph' => 'Majdanpek i Donji Milanovac, dva neodoljiva dragulja istočne Srbije, spojena prirodnim lepotama je idealna destinacija za turiste.
                            Ovde ćete pronaći mnogo zanimljivih aktivnosti i mesta za istraživanje, pružajući vam nezaboravno iskustvo tokom upoznavanja ovih čarobnih destinacija.
                            Pre dolaska se informišite o našim institucijama, smeštaju i prevozu.',

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
            ],
        ],
    ],

    'hero' => [
        'carousel' => [
            'indicators' => [
                [
                    'class' => 'active',
                    'label' => 'Slide 1',
                ],
                [
                    'class' => '',
                    'label' => 'Slide 2',
                ],
                [
                    'class' => '',
                    'label' => 'Slide 3',
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

            'slides' => [
                [
                    'img' => 'img/content/majdanpek/mpek-nocu.jpg',
                    'title' => 'Preporučujemo',
                    'text' => 'Prepoznajte destinaciju iz snova!',
                    'button_text' => 'Pročitaj više',
                    'button_link' => '/sights/dm-sights',
                ],
                [
                    'img' => 'img/content/majdanpek/majdanpek.jpg',
                    'title' => 'Popularno',
                    'text' => 'Prepoznajte destinaciju iz snova!',
                    'button_text' => 'Pročitaj više',
                    'button_link' => '/sights/mpek',
                ],
                [
                    'img' => 'img/content/majdanpek/mpek2.jpg',
                    'title' => 'Manje poznato',
                    'text' => 'Prepoznajte destinaciju iz snova!',
                    'button_text' => 'Pročitaj više',
                    'button_link' => '/about-majdanpek',
                ],
            ],
        ],
    ],
];
