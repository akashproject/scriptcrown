<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $table = 'businesses';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','title','slug','excerpt','description','banner_image','featured_image','meta_title','meta_description','schema','robots','utm_campaign','utm_source','status','created_at',
    ];
}
