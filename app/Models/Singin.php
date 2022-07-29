<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singin extends Model
{
    use HasFactory;
    protected $table = 'singin';
    protected $fillable = 
    [
        'name' => 'name',
        'email' => 'email',
        'phone' => 'phone',
        'genre' => 'genre',
        'instagram' => 'instagram',
        'tiktok' => 'tiktok',
        'age' => 'age',
        'hip' => 'hip',
        'bust' => 'bust',
        'waist' => 'waist',
        'stature' => 'stature',
        'weight' => 'weight',
        
    ];

    public $timestamps = false;

   public function image()
   {
        return $this->hasMany(Images::class, 'image', 'id');
   }
}
