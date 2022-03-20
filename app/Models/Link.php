<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'link',
        'title',
        'image',
        'showable'
    ];

    static public $inputsByEntity = [
        'Адрес ссылки на новость СМИ - обязательно' => ['text' => 'link'],
        'Краткая информация о новости СМИ - обязательно (максимум 255 символов)' => ['text' => 'title'],
        'Изображение (Поддерживаются форматы: PNG, JPG) - обязательно' => ['file' => 'image'],
        'Показывать ссылку на новость СМИ' => ['checkbox' => 'showable']
    ];
}
