<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    //
    use HasFactory;
    protected $table = 'technologies';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','featured_image','created_at',
    ];
}
