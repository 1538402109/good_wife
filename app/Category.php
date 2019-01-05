<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorys';
    protected $fillable = ["name",'parent_id'];
    public function childs() {
        return $this->hasMany('App\Category','parent_id','id') ;
    }
}
