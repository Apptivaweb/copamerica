<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fcm_token extends Model
{
    protected $table = "fcm_tokens";    
    protected $fillable =['fcm_token'];     
}
