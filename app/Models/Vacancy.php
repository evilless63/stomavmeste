<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'about',
        'showable'
    ];

    static public $inputsByEntity = [
        'Наименование вакансии - обязательно (максимум 255 символов)' => ['text' => 'title'],
        'Обязанности и требуемые навыки - обязательно' => ['text' => 'about'],
        'Показывать сотрудника пользователям' => ['checkbox' => 'showable']
    ];
}
