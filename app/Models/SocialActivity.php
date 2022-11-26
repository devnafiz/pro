<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Spatie\Translatable\HasTranslations;

class SocialActivity extends Model
{
    use HasFactory;
    //use HasTranslations;
    	
    protected $table = 'social';    
    protected $fillable = [
        'heading', 'image', 'des','user','status','about',
    ];

    // public function newscat(){

    // 	return $this->belongsTo(News_cat::class,'cat_id','id');
    // }

}
