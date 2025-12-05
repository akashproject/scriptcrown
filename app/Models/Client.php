<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    use HasFactory;
    protected $table = 'clients';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','designation','featured_image','company_name','company_logo','meta_title','meta_description','schema','robots','utm_campaign','utm_source','created_at',
    ];
}
