<?php

/**
 * Created by PhpStorm.
 * User: Lourence
 * Date: 4/14/2016
 * Time: 1:44 AM
 */
class MyController extends BaseController
{
    public function logout() {
        
        Auth::logout();
        Session::forget('islogin');
        return Redirect::to('/');
    } 
}