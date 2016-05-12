<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee
 *
 * @author Hp
 */
class Employee extends Eloquent {
    //put your code here
    protected $table = 'employee';
    
    protected $primaryKey = 'user_id';
    
    public function user() {
        
        return $this->belongsTo('User');
    }
}
