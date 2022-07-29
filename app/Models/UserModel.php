<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user_models';
    protected $fillable = [
        'name',
        'lastName',
        'age',
        'path'
    ];
    public $timestamps = false;
}
