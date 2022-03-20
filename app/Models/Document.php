<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'file',
        'type',
        'showable',
    ];

    static public $inputsByEntity = [
        'Название документа - обязательно (максимум 255 символов)' => ['text' => 'title'],
        'Файл для скачивания (Поддерживаются форматы: PDF, DOC, DOCX) - обязательно' => ['file' => 'file'],
        'Тип документа' => [
            'select' => [
                'table_id' => 'type',
                'options' => [
                    'REPORT' => 'Отчеты',
                    'STATUTORY' => 'Уставные документы'
                ]
            ]
        ],
        'Показывать документ пользователям' => ['checkbox' => 'showable']
    ];
}
