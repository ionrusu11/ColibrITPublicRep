<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\OperatorsModel;

class OperatorAuth extends BaseController
{
    public function __construct()
    {
        helper(['url','Form']);
    }

    public function index()
    {
        $title = "Login Operator";

        return view('operator/auth',compact("title"));

    }

    function check(){

        $validation = $this->validate([
            'username' => [
                'rules' =>'required|is_not_unique[admin.username]',
                'messages' => [
                    'required' => 'Enter a valid username',
                    'is_not_unique' => 'This username is not registered on admin Panel'
                ]
            ],
            'password' => [
                'rules' =>'required|min_length[5]|max_length[23]',
                'messages' => [
                    'required' => 'Password is required',
                    'min_length' => 'Passwords must be at least 5 characters',
                    'max_length' => 'You have exceeded the limit of 23 characters',
                ]
            ]
        ]);

        if(!$validation){
            return view('operator/auth',['validation' => $this->validator]);
        }else{
            // Verify data to database
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $OperatorModel = new OperatorsModel();
            $user_info = $OperatorModel->where('username',$username)->first();
            $check_password = Hash::check($password,$user_info['password']);

            if(!$check_password){
                session()->setFlashdata('fail','Incorect password');
                return redirect()->to('/operator/auth')->withInput();
            }else{
                $user_id = $user_info['id'];
                session()->set('loggedOperator',$user_id);
                return redirect()->to('/operator');
            }
        }
    }

    public function logout(){
        if(session()->has('loggedOperator')){
            session()->remove('loggedOperator');
            return redirect()->to('operator/auth?access=out')->with('fail','You are logged out!');
        }
    }


}
