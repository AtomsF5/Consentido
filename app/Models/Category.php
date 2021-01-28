<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /*use HasFactory;*/

    // protected $guarded = [];
    
    // public function subcategory(){
    //     return $this->hasMany('App\Category', 'parent_id');

    protected $fillable= [
        'slug', 'title', 'descripction', 'name', 'urlimage', 'visit', 'order', 'coverpage'
    ];
}
