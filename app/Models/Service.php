<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','category_id','technology_id','name','slug','excerpt','description','banner_image','featured_image','title','meta_description','schema','robots','utm_campaign','utm_source','status','created_at',
    ];
}
