<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
     protected $fillable = [
        'name', 'image', 'des','user','status','cat_id'
    ];


    public function client_category(){

    	return $this->belongsTo(ClientCat::class,'cat_id','id');
    }
}
