<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profile',
        'image',
        'showable'
    ];

    static public $inputsByEntity = [
        'Фамилия Имя (Отчетсво)' => ['text' => 'name'],
        'Деятельность (чем занимается)' => ['text' => 'profile'],
        'Изображение' => ['file' => 'image'],
        'Показывать сотрудника пользователям' => ['checkbox' => 'showable']
    ];
}
