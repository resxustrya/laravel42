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
class AccountController extends BaseController {
    
    public function handleLogin() {
        
        
        $emp = Employers::where('email', '=', Input::get('email'))
                ->where('password', '=', Input::get('password'))
                ->first();
        
        if($emp and ($emp->email == Input::get('email') and $emp->password == Input::get('password'))) {
            Session::put('employer', $emp);
            return Redirect::to('/');
        }
        
        $app = Applicants::where('email', '=', Input::get('email'))
                ->where('password', '=', Input::get('password'))
                ->first();
        if($app and ($app->email == Input::get('email') and $app->password == Input::get('password'))) {
            Session::put('applicant',$app);
            return Redirect::to('/');
        }
        return Redirect::to('user-login')->with('msg','Invalid email or password');
    }
      
    /*
    * Check if email is already exists into employers and applicants table
    * if exits, redirect back to registration page and try another email
    * otherwise create a new user record
     * With validator
    */
    public function next() {
        
        $emp = Employers::where('email', '=', Input::get('email'))->first();
        $app = Applicants::where('email', '=', Input::get('email'))->first();
        
        if(($emp and $emp->email == Input::get('email')) or ($app and $app->email == Input::get('email'))){
            return Redirect::to('user-register')
                    ->with('message','Email is already used');
                   
        }
        $temp = array(
            'email' => Input::get('email'),
            'fname' => Input::get('fname'),
            'lname' => Input::get('lname'),
            'pass' => Input::get('password')
        );
        
        $rules = array(
            'email' => 'required|email',
            'fname' => 'required',
            'lname' => 'required',
            'pass' => 'required|min:10'
        );
        $messages = array(
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email',
            'fname.required' => 'First Name is required',
            'lname.required' => 'Last Name is required',
            'pass.require' => 'Password is required'
        );
        $validator = Validator::make($temp,$rules,$messages);
        
        if($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::to('user-register')
                    ->with('error',$messages);
        }
        Session::put('temp', $temp);
        
        return View::make('account.next');
    }
}
