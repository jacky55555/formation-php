<?php

$users = [
    [
        "id" => 1,
        "nom" => "Sookia",
        "prenom" => "Khalid",
        "email" => "khalid.sookia@iknsa.com",
        "pass" => "paris"
    ],
    [
        "id" => 2,
        "nom" => "Camara",
        "prenom" => "Moussa",
        "email" => "moussa.camara@iknsa.com",
        "pass" => "cergy"
    ],
    [
        "id" => 3,
        "nom" => "Kifia",
        "prenom" => "Moustakime",
        "email" => "moustakime.kifia@iknsa.com",
        "pass" => "Nanterre"
    ]
];

$data = [
    [
        "id" => 2,
        "age" => 23,
        "pass" => "toto"
    ],
    [
        "id" => 1,
        "age" => 15,
        "pass" => "Nanterre"
    ],
    [
        "id" => 3,
        "age" => 35,
        "pass" => "Nanterre"
    ]
];

foreach ($users as $key => $user) {

    foreach ($data as $datum) {
        if ($datum["id"] === $user["id"]) {
            $users[$key] = array_merge($user, $datum);
        }
    }
}
