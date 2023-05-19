<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\TransferModel;


class Transfer extends ResourceController
{
    public function __construct() {
        $this->transferModel = new TransferModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {   
        $transfers = $this->transferModel->findAll();

        $payload = [
            "transfers" => $transfers
        ];

        echo view('transfer/index', $payload);
    }


    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function home()
    {
        $transfers = $this->transferModel->findAll();

        $payload = [
            "transfers" => $transfers
        ];

        echo view('transfer/home', $payload);
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
        echo view('transfer/new');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $fileName = "";

        $photo = $this->request->getFile('photo');

        if ($photo) {
            $fileName = $photo->getRandomName(); // Mendapatkan nama file baru secara acak

            $photo->move('photos', $fileName); // Memindahkan file ke public/photos dengan nama acak
        }

        $payload = [
            "name" => $this->request->getPost('name'),
            "country" => $this->request->getPost('country'),
            "position" => $this->request->getPost('position'),
            "age" => (int) $this->request->getPost('age'),
            "wage" => (int) $this->request->getPost('wage'),
            "price" => $this->request->getPost('price'),
            "photo" => $fileName, 
            "team" => $this->request->getPost('team'),
            "previous" => $this->request->getPost('previous'),
        ];

        // <!-- name, age, team, price, wage, previous, country, position, photo -->

        $this->transferModel->insert($payload);
        return redirect()->to('/transfer');
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
        $this->transferModel->delete($id);
        return redirect()->to('/projek');
    }
}
