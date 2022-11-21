<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable=['image','cat_id','status','name'];

    public function album_category(){

    	return $this->belongsTo(AlbumCat::class,'cat_id','id');
    }
}
