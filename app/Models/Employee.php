<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'profile',
        'image',
        'showable'
    ];

    static public $inputsByEntity = [
        'Фамилия Имя (Отчетство) - обязательно (максимум 255 символов)' => ['text' => 'title'],
        'Деятельность (чем занимается) - обязательно' => ['text' => 'profile'],
        'Изображение (Поддерживаются форматы: PNG, JPG) - обязательно' => ['file' => 'image'],
        'Показывать сотрудника пользователям' => ['checkbox' => 'showable']
    ];
}
