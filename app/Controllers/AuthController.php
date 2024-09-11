<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function login(){
        return view('layout/header')
        .view('login')
        .view('layout/footer');
    }

    public function register(){
        return view('layout/header')
        .view('register')
        .view('layout/footer');
    }
    public function home(){
         return view('layout/header')
        .view('home')
        .view('layout/footer');
}
    public function dashboard(){
         return view('layout/header')
        .view('dashboard')
        .view('layout/footer');
} 

     public function newtask(){
         return view('layout/header')
         .view('newtask')
         .view('layout/footer');
} 
     public function profile()
     {
        $data=array();

        $data['name']="sreetharan a/l thiagarajan";
        $data['username']="sreetharan";
        $data['email']="sreetharanthiagarajan@gmail.com";
        $data['password']="123456";

    return view('layout/header')
    .view('profile', $data)
    .view('layout/footer');
}
}