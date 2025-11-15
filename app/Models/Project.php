<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    //
    use HasFactory;
    protected $table = 'projects';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','client_id','service_id','technology_id','name','slug','excerpt','description','banner_image','featured_image','title','meta_description','schema','robots','utm_campaign','utm_source','status','created_at',
    ];
}
