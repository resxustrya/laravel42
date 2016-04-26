<?php

/**
 * Created by PhpStorm.
 * User: Lourence
 * Date: 4/13/2016
 * Time: 9:13 PM
 */
use Illuminate\Database\Eloquent\SoftDeletingTrait;
class Orders extends Eloquent
{
    protected $table = 'orders';
    protected $primaryKey = 'orderid';
    use SoftDeletingTrait;
    protected $dates = ['deleted_at'];
    public function orders() {
        return $this->belongsTo('User');
    }
}