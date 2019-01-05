<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ["name",'phone','address','goods_id','pay_money','status','vipflag','delflg'];

    public function setCreatedAt($value)
    {
        return date("Y-m-d H:i:s",strtotime($value));
    }

    public  function setUpdatedAt($value)
    {
        return date("Y-m-d H:i:s",strtotime($value));
    }
}
