<?php 

$movies = [
    [
        'name' => 'wolf of wallstreet',
        'year' => 2016
    ],
    [
        'name' => 'limitless',
        'year' => 2018
    ],
    [
        'name' => 'Blue eyes',
        'year' => 2000
    ],
    [
        'name' => 'dark eyes',
        'year' => 1990
    ],
    [
        'name' => 'later',
        'year' => 1960
    ]
    ];

//   function filter ($items , $fn){
//         $filteredItem = [];
//         foreach( $items as $item){
//             if($fn($item) ){
//                 $filteredItem[] = $item;
//             }
//         }
//             return $filteredItem;
//     };

    $filteredByMovies = Array_filter($movies, function($movie){
        return $movie['year']  >= 1990 && $movie['year'] <=2017;
    });

    require "index.view.php";