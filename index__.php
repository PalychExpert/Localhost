<?
$categories = ["Доски и лыжи", "Крепления", "Одежда", "Ботинки", "Инструменты", "Разное"];
$announcement = [
    0 =>[
        'name' => '2014 Snowboard',
        'category' => 'Доски и лыжи',
        'price' => '1000',
        'url' => 'img/lot-1.jpg'
    ],
    0 =>[
        'name' => '2014 Snowboard',
        'category' => 'Доски и лыжи',
        'price' => '2000',
        'url' => 'img/lot-2.jpg'
    ],
    0 =>[
        'name' => '2014 Snowboard',
        'category' => 'Крепления',
        'price' => '3000',
        'url' => 'img/lot-3.jpg'
    ],
    0 =>[
        'name' => '2014 Snowboard',
        'category' => 'Ботинки',
        'price' => '5000',
        'url' => 'img/lot-4.jpg'
    ],
    0 =>[
        'name' => '2014 Snowboard',
        'category' => 'Инструменты',
        'price' => '6000',
        'url' => 'img/lot-5.jpg'
    ],
    0 =>[
        'name' => '2014 Snowboard',
        'category' => 'Разное',
        'price' => '4000',
        'url' => 'img/lot-6.jpg'
    ]
];

$num = 0;
while ($num < count($categories)) {
    print($categories[$num]." , ");
    $num++;
}

foreach ($announcement as $key => $value){
    print($value['name']);
}

?>

