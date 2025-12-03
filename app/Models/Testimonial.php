<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    //
    use HasFactory;
    protected $table = 'testimonials';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','client_id','rating','source','video_link','description','meta_title','meta_description','schema','robots','utm_campaign','utm_source','status','created_at',
    ];

}
