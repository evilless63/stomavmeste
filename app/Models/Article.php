<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends SluggableModel
{
    use HasFactory;

    protected $fillable = [
        'meta_title',
        'meta_keywords',
        'meta_description',
        'title',
        'slug',
        'description',
        'short_description',
        'image',
        'type',
        'showable'
    ];

    static public $inputsByEntity = [
        'Мета заголовок страницы (title) - необязательно' => ['text' => 'meta_title'],
        'Мета описание страницы (description) - необязательно' => ['text' => 'meta_description'],
        'Мета ключевые слова страницы (keywords) - необязательно' => ['text' => 'meta_keywords'],
        'Заголовок - обязательно (максимум 255 символов)' => ['text' => 'title'],
        'Короткое описание - необязательно' => ['text' => 'short_description'],
        'Описание - обязательно' => ['textarea' => 'description'],
        'Изображение (Поддерживаются форматы: PNG, JPG) - обязательно' => ['file' => 'image'],
        'Показывать статью пользователям' => ['checkbox' => 'showable'],
        'Тип статьи' => [
            'select' => [
                'table_id' => 'type',
                'options' => [
                    'NEWS' => 'Новость',
                    'PATIENT-INFO' => 'Пациентам'
                ]
            ]
        ],
    ];

}
