<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends SluggableModel
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'showable'
    ];

    static public $inputsByEntity = [
        'Заголовок' => ['text' => 'title'],
        'Описание' => ['textarea' => 'description'],
        'Изображение' => ['file' => 'image'],
        'Показывать статью пользователям' => ['checkbox' => 'showable']
    ];

}
