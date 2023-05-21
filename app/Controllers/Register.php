<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel; 

class Register extends ResourceController
{
    public function __construct() {
        $this->userModel = new UserModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        echo view('auth/register');
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        try{
            $validate = $this->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'password_confirmation' => 'required|matches[password]'
            ], [
                "email" => [
                    "required" => "Fill the Email",
                ],
                "password" => [
                    "required" => "Fill the Password",
                ],
                "passsword_confirmation" => [
                    "required" => "Password confirmation not same as your password"
                ]
            ]);

            if(!$validate) {
                session()->setFlashData("errors", "Email or password is invalid");
                return redirect()->to(previous_url())->withInput();
            }

            $payload = [
                "name" => $this->request->getPost('name'),
                "email" => $this->request->getPost('email'),
                "password" => md5($this->request->getPost('password')),
            ];
    
            $this->userModel->insert($payload);
    
            $session = session();
            $session->setFlashdata('success', 'Registration successful! Please log in.');
    
            return redirect()->to('/login');


        }catch(\Exception $e) {
            return redirect()->back()->withInput();;
        }
    
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}