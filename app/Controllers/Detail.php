<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\DetailModel;

class Detail extends ResourceController
{
    public function __construct() {
        $this->detailModel = new DetailModel();
    }


    public function search()
    {
        $searchTerm = $this->request->getGet('search');
        $detailModel = new DetailModel();
        
        // Perform the search query using the $searchTerm
        $results = $detailModel->searchByName($searchTerm);

        // Pass the results to the view
        echo view('/detail/search_results', ['results' => $results]);
    }


    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $details = $this->detailModel->findAll();

        $payload = [
            "details" => $details
        ];

        echo view('detail/index', $payload);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function page()
    {
        $details = $this->detailModel->findAll();

        $payload = [
            "details" => $details
        ];
        echo view('detail/page', $payload); 
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
        echo view('detail/new');
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
            "market_value" => (int) $this->request->getPost('market_value'),
            "photo" => $fileName, // Kita simpan nama filenya saja
            "team" => $this->request->getPost('team'),
        ];

        $this->detailModel->insert($payload);
        return redirect()->to('/detail');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $detail = $this->detailModel->find($id);
        
        if (!$detail) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('detail/edit', ["data" => $detail]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
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
            "market_value" => (int) $this->request->getPost('market_value'),
            "photo" => $fileName,
            "team" => $this->request->getPost('team'),
        ];

        $this->detailModel->update($id, $payload);
        return redirect()->to('/detail/index');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->detailModel->delete($id);
        return redirect()->to('/detail');
    }
}
