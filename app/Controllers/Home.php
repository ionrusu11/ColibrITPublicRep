<?php

namespace App\Controllers;

use App\Models\PostsModel;

class Home extends BaseController
{

    public function __construct()
    {
        helper(['url','Form']);

    }
    public function index()
    {
        $title = "Home page";
        return view('users/index');
    }

    public function home()
    {
        $title = "Home page";
        return view('users/home');
    }

    public function save()
    {
        $validation = $this->validate([
           'description' => [
               'rules' => 'required',
               'errors' => [
                   'required' => 'Plese enter description'
               ]
           ]

        ]);


        if(!$validation){
            return view('users/index',['validation' => $this->validator]);
        }else{
            $image = $this->request->getPost('image_url');
            $category = $this->request->getPost('category');
            $description = $this->request->getPost('description');
            $geodata = $this->request->getPost('geodata');
            $firstname = $this->request->getPost('firstname');
            $anonim = $this->request->getPost('anonim');
            $lastname = $this->request->getPost('lastname');
            $phone = $this->request->getPost('phone');
            $email = $this->request->getPost('email');


            if($anonim != 'on'){
                $data = [
                    'imgUrl' => $image,
                    'category' => $category,
                    'description' => $description,
                    'geodata' => $geodata,
                    'anonymously' => 1,
                    'firstname' => "anonim",
                    'lastname' => "anonim",
                    'phone' => "anonim",
                    'email' => "email",
                    'status' => 1,
                    'localAuthorityId' => 1

                ];
            }else{
                $data = [
                    'imgUrl' => $image,
                    'category' => $category,
                    'description' => $description,
                    'geodata' => $geodata,
                    'anonymously' => 1,
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'phone' => $phone,
                    'email' => $email,
                    'status' => 1,
                    'localAuthorityId' => 1
                ];
            }


            $PostsModel = new PostsModel();
            $query = $PostsModel->insert($data);

            if(!$query){
                return redirect()->back()->with('fail','Ceva nu a mers bine');
            }else{
                return redirect()->to('/');
            }

        }
    }



}