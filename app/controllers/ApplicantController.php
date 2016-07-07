<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApplicantController
 *
 * @author Hp
 */
class ApplicantController extends BaseController {
   
    public function __construct() {
        
        $this->beforeFilter(function() {
            if(! Session::has('applicant')) {
                return Redirect::to('user-login');
            }
        });
    }
    public function profile() {
        return View::make('applicant.profile');
    }
    public function logout() {
       Session::forget('applicant');
       Session::flush();
       return Redirect::to('/');
    }
}
