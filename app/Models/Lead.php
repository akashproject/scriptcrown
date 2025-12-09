<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    //
    use HasFactory;
    protected $table = 'leads';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','unique_id','full_name','email_address','mobile_number','whatsapp_number','city','state','country','company_name','business_type','service_category','service_name','technology','requirement','document','utm_campaign','utm_source','lead_type','status_basket','remarks','created_at'
    ];
}
