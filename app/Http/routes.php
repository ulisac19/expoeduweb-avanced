<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('/home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);
Route::get('auth/salir', ['as' => 'auth/salir', 'uses' => 'Auth\AuthController@salir']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('callback/{provider}', 'Auth\AuthController@handleProviderCallback');

// avatar controller

// expo controller
Route::get('/expo', 'expoController@index');


Route::resource('carreras', 'carreraController');

Route::get('carreras/{id}/delete', [
    'as' => 'carreras.delete',
    'uses' => 'carreraController@destroy',
]);

Route::resource('institucions', 'institucionController');

Route::get('institucions/{id}/delete', [
    'as' => 'institucions.delete',
    'uses' => 'institucionController@destroy',
]);


Route::resource('institucions', 'institucionController');

Route::get('institucions/{id}/delete', [
    'as' => 'institucions.delete',
    'uses' => 'institucionController@destroy',
]);




Route::resource('puestos', 'puestoController');

Route::get('puestos/{id}/delete', [
    'as' => 'puestos.delete',
    'uses' => 'puestoController@destroy',
]);


Route::resource('stands', 'standController');

Route::get('stands/{id}/delete', [
    'as' => 'stands.delete',
    'uses' => 'standController@destroy',
]);


Route::resource('colors', 'colorController');

Route::get('colors/{id}/delete', [
    'as' => 'colors.delete',
    'uses' => 'colorController@destroy',
]);


Route::get('datos/{id}/edit2', ['as' => 'datos.edit2', 'uses' => 'datosController@edit2']);
Route::get('datos/{id}/edit3', ['as' => 'datos.edit3', 'uses' => 'datosController@edit3']);
Route::get('datos/{id}/edit4', ['as' => 'datos.edit4', 'uses' => 'datosController@edit4']);
Route::get('datos/{id}/edit5', ['as' => 'datos.edit5', 'uses' => 'datosController@edit5']);
Route::get('datos/{id}/edit6', ['as' => 'datos.edit6', 'uses' => 'datosController@edit6']);

Route::resource('datos', 'datosController');

Route::get('datos/{id}/delete', [
    'as' => 'datos.delete',
    'uses' => 'datosController@destroy',
]);


Route::resource('avatarAltos', 'avatar_altoController');

Route::get('avatarAltos/{id}/delete', [
    'as' => 'avatarAltos.delete',
    'uses' => 'avatar_altoController@destroy',
]);


Route::resource('avatarBajos', 'avatar_bajoController');

Route::get('avatarBajos/{id}/delete', [
    'as' => 'avatarBajos.delete',
    'uses' => 'avatar_bajoController@destroy',
]);


Route::resource('avatarMedios', 'avatar_medioController');

Route::get('avatarMedios/{id}/delete', [
    'as' => 'avatarMedios.delete',
    'uses' => 'avatar_medioController@destroy',
]);



Route::get('estados/estadospais/{id}', ['as' => 'estados.estadospais', 'uses' => 'estadoController@estadospais']);


Route::resource('estados', 'estadoController');
Route::get('estados/{id}/delete', [
    'as' => 'estados.delete',
    'uses' => 'estadoController@destroy',
]);


Route::resource('avatars', 'avatarController');

Route::get('avatars/{id}/delete', [
    'as' => 'avatars.delete',
    'uses' => 'avatarController@destroy',
]);

Route::get('/stands/viewclient/{id}', [
        'as' => 'stands.viewclient', 
        'uses' => 'standController@viewstand'
]);


Route::resource('datosStands', 'datos_standController');

Route::get('datosStands/{id}/delete', [
    'as' => 'datosStands.delete',
    'uses' => 'datos_standController@destroy',
]);


Route::resource('dimensionPartes', 'dimension_parteController');

Route::get('dimensionPartes/{id}/delete', [
    'as' => 'dimensionPartes.delete',
    'uses' => 'dimension_parteController@destroy',
]);


Route::resource('parteStands', 'parte_standController');

Route::get('parteStands/{id}/delete', [
    'as' => 'parteStands.delete',
    'uses' => 'parte_standController@destroy',
]);


Route::resource('parteTipos', 'parte_tipoController');

Route::get('parteTipos/{id}/delete', [
    'as' => 'parteTipos.delete',
    'uses' => 'parte_tipoController@destroy',
]);


Route::resource('posicionStands', 'posicion_standController');

Route::get('posicionStands/{id}/delete', [
    'as' => 'posicionStands.delete',
    'uses' => 'posicion_standController@destroy',
]);

Route::resource('stands', 'standController');

Route::get('stands/{id}/delete', [
    'as' => 'stands.delete',
    'uses' => 'standController@destroy',
]);


Route::resource('tipoStands', 'tipo_standController');
Route::get('tipoStands/{id}/delete', ['as' => 'tipoStands.delete','uses' => 'tipo_standController@destroy',]);

Route::get('tipoStands/select/{id}' ,['as'=>'tipoStands.select','uses'=>'tipo_standController@select',]);
Route::get('tipoStands/{id}/selecttipo', ['as' => 'tipoStands.selecttipo', 'uses' => 'tipo_standController@selecttipo']);



Route::resource('caras', 'caraController');

Route::get('caras/{id}/delete', [
    'as' => 'caras.delete',
    'uses' => 'caraController@destroy',
]);


Route::resource('ciudads', 'ciudadController');

Route::get('ciudads/ciudadesestado/{id}', ['as' => 'ciudads.ciudadesestado', 'uses' => 'ciudadController@ciudadesestado']);

Route::get('ciudads/{id}/delete', [
    'as' => 'ciudads.delete',
    'uses' => 'ciudadController@destroy',
]);

Route::get('/stand/all', [
    'as' => 'stand.all',
    'uses' => 'homeController@allJson']);

Route::get('/tipos/all', [
    'as' => 'tipos.all',
    'uses' => 'homeController@allJson2',
]);

Route::resource('stands', 'standController');

Route::get('stands/{id}/delete', [
    'as' => 'stands.delete',
    'uses' => 'standController@destroy',
]);

Route::get('chats/todos/{id}/{id2}', [
    'as' => 'chats.todos',
    'uses' => 'chatController@todos',
]);

Route::get('chats/conTodos/{id}', [
    'as' => 'chats.conTodos',
    'uses' => 'chatController@conTodos',
]);


Route::get('chats/comentario', [
    'as' => 'chats.comentario',
    'uses' => 'chatController@comentario',
]);

Route::resource('chats', 'chatController');

Route::get('chats/{id}/delete', [
    'as' => 'chats.delete',
    'uses' => 'chatController@destroy',
]);



Route::get('faqs/gettexto/{id}', [ 'as'=>'faqs.gettexto', 'uses' => 'faqController@gettexto',]);
Route::get('faqs/todos', [ 'as'=>'faqs.todos', 'uses' => 'faqController@todos']);
Route::get('faqs/otra', [ 'as'=>'faqs.otra', 'uses' => 'faqController@otra']);
Route::get('faqs/actualizar', [ 'as'=>'faqs.actualizar', 'uses' => 'faqController@actualizar']);
Route::get('faqs/actualizar2', [ 'as'=>'faqs.actualizar2', 'uses' => 'faqController@actualizar2']);

Route::resource('faqs', 'faqController');

Route::get('faqs/{id}/delete', [
    'as' => 'faqs.delete',
    'uses' => 'faqController@destroy',
]);


Route::resource('posiciones', 'posicionesController');

Route::get('posiciones/{id}/delete', [
    'as' => 'posiciones.delete',
    'uses' => 'posicionesController@destroy',
]);


Route::resource('ferias', 'feriaController');

Route::get('ferias/{id}/delete', [
    'as' => 'ferias.delete',
    'uses' => 'feriaController@destroy',
]);


Route::resource('pais', 'paisController');

Route::get('pais/{id}/delete', [
    'as' => 'pais.delete',
    'uses' => 'paisController@destroy',
]);
