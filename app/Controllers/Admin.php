<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\OperatorsModel;
use App\Models\PostsModel;

class Admin extends BaseController
{
    public function index(): string
    {
        $title = "Admin Page";
        $AdminModel = new AdminModel();
        $loggedUserID = session()->get('loggedAdmin');
        $user = $AdminModel->find($loggedUserID);
        return view("admin/index",compact('title','user'));
    }

    public function operators()
    {
        $title = "Admin Page";
        $AdminModel = new AdminModel();
        $loggedUserID = session()->get('loggedAdmin');
        $user = $AdminModel->find($loggedUserID);

        $OperatorModel = new OperatorsModel();
        $operators = $OperatorModel->findAll();

        return view("admin/operators",compact('title','user','operators'));
    }

    public function reports()
    {
        $title = "Admin Page";
        $AdminModel = new AdminModel();
        $loggedUserID = session()->get('loggedAdmin');
        $user = $AdminModel->find($loggedUserID);

        $OperatorModel = new OperatorsModel();
        $operators = $OperatorModel->findAll();

        $PostsModel = new PostsModel();
        $reports = $PostsModel->findAll();

        return view("admin/reports",compact('title','user','operators','reports'));
    }






}