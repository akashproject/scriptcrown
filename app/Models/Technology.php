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
        'id','type_id','name','title','slug','excerpt','description','banner_image','featured_image','faqs','meta_title','meta_description','schema','robots','utm_campaign','utm_source','status','created_at',
    ];
}
