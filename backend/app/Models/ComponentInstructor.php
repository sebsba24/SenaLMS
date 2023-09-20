<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentInstructor extends Model
{
    use HasFactory;

    protected $table = 'component_instructor';

    protected $fillable = [
        'component_id',
        'instructor_id',
        'study_sheet_id'
    ];
}
