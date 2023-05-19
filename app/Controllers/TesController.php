<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TesController extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Football Web",
            "name" => "ByRazzan"
        ];

        echo view('index', $data);
    }
}