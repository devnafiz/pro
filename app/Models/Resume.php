<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $fillable =['heading','des','cat_id','sub_cat_id','rating','status'];

    public function resume_cat(){

    	return $this->belongsTo(ResumeCat::class,'cat_id','id');
    }
}
