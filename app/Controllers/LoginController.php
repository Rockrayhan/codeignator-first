<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;



class LoginController extends BaseController
{
    protected $helpers = ['form'];



    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $session =  session();
        $userModel =  new UserModel();
        $email =  $this->request->getVar('email');
        $formpass =  $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first(); 
        // print_r($data);

        if ( $data ){
            $dbpass =  $data['password'];
            $verified = password_verify($formpass, $dbpass);
            if ($verified){
                $userData = [
                    "name" => $data['name'],
                    "email" => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($userData);
                return redirect()->to('/') ;
            } else {
                $session->setFlashdata('msg', 'Your Password is Incorrect');
                return view('login') ;
            }
        } else {
            $session->setFlashdata('msg', 'Your Email Incorrect');
            return view('login') ;
        }

        // print_r($data);
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('login');
    }
}
