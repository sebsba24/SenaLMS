<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningAchivement extends Model
{
    use HasFactory;

    protected $table = 'learning_achivements';

    protected $fillable = [
        'name',
        'competence_id',
        'code'
    ];
}
