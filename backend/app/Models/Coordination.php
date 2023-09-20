<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordination extends Model
{
    use HasFactory;
    protected $table = 'coordinations';
    protected $fillable = ['name'];
}
