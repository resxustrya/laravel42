<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author Hp
 */
class LoginController  extends BaseController{
    //put your code here
    
    public function create_user() {
        return View::make('create_user');
    }
}
