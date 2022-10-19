<?php
use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', function () { return view('home'); })->name('home');

// Ссылка на страницу определенного контакта
Route::get('/list/{id}','App\Http\Controllers\ContactController@oneContact')->name('one-contact');

// Ссылка на список контактов
Route::get('/list','App\Http\Controllers\ContactController@allContact')->name('list');

// Отслеживание Хибби или Уменния у определенного контакта
Route::get('/list/delete/hobby{id}', 'App\Http\Controllers\ContactController@deleteHobby')->name('delete-hobby');
Route::get('/list/delete/skili{id}', 'App\Http\Controllers\ContactController@deleteSkill')->name('delete-skill');

// Обновления данных о Хибби или Уменние у определенного контакта
Route::get('/list/{id}/update-hobby','App\Http\Controllers\ContactController@updateHobby')->name('update-hobby');
Route::post('/list/{id}/update-hobby','App\Http\Controllers\ContactController@updateHobbyform')->name('update-hobby-form');

Route::get('/list/{id}/update-skill','App\Http\Controllers\ContactController@updateSkill')->name('update-skill');
Route::post('/list/{id}/update-skill','App\Http\Controllers\ContactController@updateSkillform')->name('update-skill-form');
