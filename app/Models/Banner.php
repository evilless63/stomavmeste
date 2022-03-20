<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'title_description', 'image', 'showable', 'help_link'];

    static public $inputsByEntity = [
        'Заголовок - обязательно (максимум 255 символов)' => ['text' => 'title'],
        'Описание - обязательно' => ['text' => 'title_description'],
        'Изображение (Поддерживаются форматы: PNG, JPG) - обязательно' => ['file' => 'image'],
        'Показывать кнопку "Помочь"' => ['checkbox' => 'help_link'],
        'Показывать баннер пользователям' => ['checkbox' => 'showable'],
    ];
}
