<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrdersAdd extends Model
{
    protected $table="ordersAdd";
    public $primaryKey='oa_id';
    public $timestamps=false;
}
