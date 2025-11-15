<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','parent_id','name','slug','excerpt','description','banner_image','featured_image','title','meta_description','schema','robots','utm_campaign','utm_source','status','created_at',
    ];


    public function service()
    {
        return $this->morphMany(Service::class, 'type_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
