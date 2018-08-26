<?php

$app->get('/', function (){
    return response()->json([
        'notas' => [
            'laboratorio_1' => 5.0,
            'laboratorio_2' => 5.0,
            'laboratorio_3' => 5.0,
            'blog' => 5.0,
        ]
    ]);
});

$app->post('/', function (){
    return response()->json([
        'notas' => [
            'laboratorio_1' => 5.0,
            'laboratorio_2' => 5.0,
            'laboratorio_3' => 5.0,
            'blog' => 5.0,
        ]
    ]);
});