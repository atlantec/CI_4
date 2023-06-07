<?php

namespace App\Controllers\Manager;

use App\Controllers\BaseController;

class ManagerController extends BaseController
{
    public function index()
    {

        $data = array(
            'title' => 'Titulo',
        );
        return view('manager/home/index', $data);
    }
}
