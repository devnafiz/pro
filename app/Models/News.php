<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Spatie\Translatable\HasTranslations;

class News extends Model
{
    use HasFactory;
    //use HasTranslations;
    	

    protected $fillable = [
        'heading', 'image', 'des','user','status','about','cat_id','post','slug'
    ];

    public function newscat(){

    	return $this->belongsTo(News_cat::class,'cat_id','id');
    }

}
