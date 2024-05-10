<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/users", function(){
    $users = [
        [
            "id" => 1,
            "nama" => "Farid",
            "pekerjaan" => "Seorang Backend"
        ],
        [
            "id" => 2,
            "nama" => "adnan",
            "pekerjaan" => "programmer"
        ],
        [
            "id" => 3,
            "nama" => "maahir",
            "pekerjaan" => "programmer"
        ]
    ];

    return view("users.index", [
        "users" => $users
    ]);
});

Route::get("/users/{id}", function(string $id){
    $users = [
        [
            "id" => 1,
            "nama" => "Farid",
            "pekerjaan" => "Seorang Backend"
        ],
        [
            "id" => 2,
            "nama" => "adnan",
            "pekerjaan" => "programmer"
        ],
        [
            "id" => 3,
            "nama" => "maahir",
            "pekerjaan" => "programmer"
        ]
    ];

    $result = null;

    foreach($users as $user){
        if($user["id"] == $id){
            $result = $user;
        }
    }

    return view("users.detail", [
        "user" => $result,
    ]);
})->name("users.detail");