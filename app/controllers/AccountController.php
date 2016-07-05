<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccountController
 *
 * @author Hp
 */
class AccountController extends BAseController {
    
    public function handleLogin() {
        $data = array('email' => Input::get('email'), 'password' => Input::get('password'));
        
        switch(Input::get('type')) {
            case 'app' :
                if(AppAuth::login($data)) {
                    return Redirect::to('/');
                } else {
                    return "Invalid email and password for Applicant";
                }
            break;
            case 'emp' :
                if(EmpAuth::login($data)) {
                    return Redirect::to('/');
                } else {
                    return "Invalid email and password Employer";
                }
            break;
        }
    }
    public function applicant_save() {
        $app = Applicants::where('email', '=', Input::get('email'));
        $emp = Employers::where('email', '=', Input::get('email'));
        
        if($app || $emp) {
            return Redirect::to('user-login')->with('msg','Email is already used');
        }
    }
}
