<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Logout extends BaseController
{
    public function index()
    {   

        $session = \Config\Services::session();
        $session->remove('id');
        $session->remove('name');
        $session->remove('loggedIn');

        $session->setFlashdata('success', 'Successfully Logout!');

        return redirect()->to('/login');
    }
}