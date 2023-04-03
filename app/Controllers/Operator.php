<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\OperatorsModel;
use App\Models\PostsModel;

class Operator extends BaseController
{
    public function index()
    {
        $OperatorsModel = new OperatorsModel();
        $title = "Operator Page";
        $loggedUserID = session()->get('loggedOperator');
        $user = $OperatorsModel->find($loggedUserID);

        return view("operator/index",compact("title","user"));
    }

    public function reports()
    {
        $title = "Operator Page";
        $OperatorModel = new OperatorsModel();
        $loggedUserID = session()->get('loggedOperator');
        $user = $OperatorModel->find($loggedUserID);

        $PostsModel = new PostsModel();
        $reports = $PostsModel->findAll();

        return view("operator/reports",compact('title','user','reports'));
    }

    public function update_status()
    {
        $status = $this->request->getPost('status');
        $id = $this->request->getPost('id');
        $PostsModel = new PostsModel();

        $data = ['status' => $status];
        $query = $PostsModel->update($id,$data);
        if(!$query){
            if($this->request->getPost("type") == "operator"){
                return redirect()->to('/operator');
            }
            if($this->request->getPost("type") == "admin"){
                return redirect()->to('/admin');
            }
        }else {
            if ($this->request->getPost("type") == "operator") {
                return redirect()->to('/operator/reports');
            }
            if ($this->request->getPost("type") == "admin") {
                return redirect()->to('/admin/reports');
            }
        }

    }



}
