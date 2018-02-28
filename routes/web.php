<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/",[
    "as" => "home.index",
    "uses" => "HomeController@index",
]);

Route::get("/api/equipos/{id}",[
    "as" => "api.equipos",
    "uses" => "EquiposController@apiIndex",
]);

Route::get("/api/equipos",[
    "as" => "api.equipos",
    "uses" => "EquiposController@apiIndexAll",
]);

Route::get("/logout",[
    "as" => "logout",
    "uses" => "UsuariosController@logOut",
]);
Route::group(["prefix" => "panel", "middleware" => ["auth"]],function(){
    Route::get('/', function () {
        return view('home');
    });

    //GRUPO DE JUGADORES
    Route::group(["prefix" => "jugadores"],function(){
        //index
        Route::get("/",[
            "as" => "jugadores.index",
            "uses" => "JugadoresController@index",
        ]);
        //index
        Route::get("/index",[
            "as" => "jugadores.index",
            "uses" => "JugadoresController@index",
        ]);
        Route::get("/create",[
            "as" => "jugadores.create",
            "uses" => "JugadoresController@create",
        ]);
        Route::post("/store",[
            "as" => "jugadores.store",
            "uses" => "JugadoresController@store"
        ]);
        Route::delete("/destroy/{id}",[
            "as" => "jugadores.destroy",
            "uses" => "JugadoresController@destroy"
        ]);
        Route::get("/edit/{id}",[
            "as" => "jugadores.edit",
            "uses" => "JugadoresController@edit"
        ]);
        Route::put("/update/{id}",[
            "as" => "jugadores.update",
            "uses" => "JugadoresController@update"
        ]);
    });
    //GRUPO DE PARTIDOS
    Route::group(["prefix" => "partidos"],function(){
        //index
        Route::get("/",[
            "as" => "partidos.index",
            "uses" => "PartidosController@index",
        ]);
        //index
        Route::get("/index",[
            "as" => "partidos.index",
            "uses" => "PartidosController@index",
        ]);
        Route::get("/create",[
            "as" => "partidos.create",
            "uses" => "PartidosController@create",
        ]);
        Route::post("/store",[
            "as" => "partidos.store",
            "uses" => "PartidosController@store"
        ]);
        Route::delete("/destroy/{id}",[
            "as" => "partidos.destroy",
            "uses" => "PartidosController@destroy"
        ]);
    });

    //GRUPO DE EQUIPOS
    Route::group(["prefix" => "equipos"],function(){
        //index
        Route::get("/",[
            "as" => "equipos.index",
            "uses" => "EquiposController@index",
        ]);
        //index
        Route::get("/index",[
            "as" => "equipos.index",
            "uses" => "EquiposController@index",
        ]);

        //vista del formulario de alta
        Route::get("/create",[
            "as" => "equipos.create",
            "uses" => "EquiposController@create"
        ]);

        //action del formulario de alta
        Route::post("/store",[
            "as" => "equipos.store",
            "uses" => "EquiposController@store"
        ]);

        //vista del formulario de edición
        Route::get("/edit/{id}",[
            "as" => "equipos.edit",
            "uses" => "EquiposController@edit"
        ]);

        //action del formulario de edición
        Route::put("/update/{id}",[
            "as" => "equipos.update",
            "uses" => "EquiposController@update"
        ]);

        Route::delete("/destroy/{id}",[
            "as" => "equipos.destroy",
            "uses" => "EquiposController@destroy"
        ]);
    });
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
