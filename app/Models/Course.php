<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name_course', 'descricao_course', 'value_course', 'duracao_course', 'instrutor_course', 'img_course', 'msg_course', 'status_course', 'type_course'];


}
