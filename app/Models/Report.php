<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends SluggableModel
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'file',
        'showable',
        'date',
    ];

    static public $inputsByEntity = [
        'Заголовок' => ['text' => 'title'],
        'Описание' => ['textarea' => 'description'],
        'Изображение' => ['file' => 'image'],
        'Дата отчета' => ['date' => 'date'],
        'Показывать отчет пользователям' => ['checkbox' => 'showable']
    ];
}
