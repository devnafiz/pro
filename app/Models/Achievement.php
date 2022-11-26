<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Spatie\Translatable\HasTranslations;

class Achievement extends Model
{
    use HasFactory;
    //use HasTranslations;
    	
    protected $table = 'achievements';    
    protected $fillable = [
        'heading', 'image', 'des','user','status',
    ];

    // public function newscat(){

    // 	return $this->belongsTo(News_cat::class,'cat_id','id');
    // }

}
