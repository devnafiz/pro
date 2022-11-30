<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Spatie\Translatable\HasTranslations;

class Video extends Model
{
    use HasFactory;
    //use HasTranslations;
    protected $table ='videos';
    	

    protected $fillable = [
        'heading','status','cat_id','post'
    ];

    public function newscat(){

    	return $this->belongsTo(News_cat::class,'cat_id','id');
    }

}
