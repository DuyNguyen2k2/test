<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'position', 'salary', 'department'];

    protected $casts = [
        'salary' => 'decimal:2',
    ];
    public $timestamps = false;
}
