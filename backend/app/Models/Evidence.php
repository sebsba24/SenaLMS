<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    use HasFactory;

    protected $table = 'evidences';

    protected $fillable = [
        'title',
        'description',
        'file',
        'activation_date',
        'due_date',
        'learning_achivement_id',
        'instructor_id'
    ];
}
