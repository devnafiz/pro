<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
		'heading','des','status','image','like','cat_id'
	];


	public function port_category(){

		return $this->belongsTo(PortfolioCat::class,'cat_id','id');
	}
}
