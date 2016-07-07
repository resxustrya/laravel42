


<?php

class EmployerController extends BaseController {
    
    public function __construct() {
        
         $this->beforeFilter(function() {
            if(! Session::has('employer')) {
                return Redirect::to('user-login');
            }
        });
    }
    
    public function logout() {
        if(Session::has('employer')) {
            Session::forget('employer');
            Session::flush();
            return Redirect::to('/');
        }
        return Redirect::to('/');
    }
}