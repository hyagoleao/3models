<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{

    use HasFactory;
    protected $table = 'image';
    protected $fillable = ['image', 'path'];
    public $timestamps = false;

    public function singin()
    {
        return $this->belongsTo( Singin::class, 'singin', 'id');
    }
}
