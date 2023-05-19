<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\TeamModel; 
use App\Models\DetailModel;
use App\Models\TransferModel;


class Projek extends ResourceController
{
    public function __construct() {
        $this->teamModel = new TeamModel();
        $this->detailModel = new DetailModel();
        $this->transferModel = new TransferModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        
        $teams = $this->teamModel->findAll();

        $payload = [
            "teams" => $teams
        ];

        echo view('projek/index', $payload);
    }
    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */


     public function home()
    {
        
        $teams = $this->teamModel->paginate(6, 'teams');
        $details = $this->detailModel->paginate(4, 'details');
        $transfers = $this->transferModel->paginate(1, 'transfers');
        

        
        $payload = [
            "teams" => $teams,
            "details" => $details,
            "transfers" => $transfers,
            "pager" => $this->detailModel->pager,
            "pager" => $this->teamModel->pager,
            "pager" => $this->transferModel->pager
        ];
        
        echo view('projek/home', $payload);
        
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
        echo view('projek/new');
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
            "league" => $this->request->getPost('league'),
            "country" => $this->request->getPost('country'),
            "players" => (int) $this->request->getPost('players'),
            "photo" => $fileName,
        ];


        $this->teamModel->insert($payload);
        return redirect()->to('/projek');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $team = $this->teamModel->find($id);
        
        if (!$team) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('projek/edit', ["data" => $team]);
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
            "league" => $this->request->getPost('league'),
            "country" => $this->request->getPost('country'),
            "players" => (int) $this->request->getPost('players'),
            "photo" => $fileName,
        ];

        $this->teamModel->update($id, $payload);
        return redirect()->to('/projek');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->teamModel->delete($id);
        return redirect()->to('/projek');
    }
    

    public function team()
    {
        $teams = $this->teamModel->findAll();

        $payload = [
            "teams" => $teams
        ];

        echo view('projek/team', $payload);
    }


    public function premier_league()
    {
        $teams = $this->teamModel->findAll();

        $payload = [
            "teams" => $teams
        ];

        echo view('league/premier_league', $payload);
    }

    public function la_liga()
    {
        $teams = $this->teamModel->findAll();

        $payload = [
            "teams" => $teams
        ];

        echo view('league/la_liga', $payload);
    }

    public function bundesliga()
    {
        $teams = $this->teamModel->findAll();

        $payload = [
            "teams" => $teams
        ];

        echo view('league/bundesliga', $payload);
    }

    public function serie_a()
    {
        $teams = $this->teamModel->findAll();

        $payload = [
            "teams" => $teams
        ];

        echo view('league/serie_a', $payload);
    }

    public function ligue1()
    {
        $teams = $this->teamModel->findAll();

        $payload = [
            "teams" => $teams
        ];

        echo view('league/ligue1', $payload);
    }

    public function eredivisie()
    {
        $teams = $this->teamModel->findAll();

        $payload = [
            "teams" => $teams
        ];

        echo view('league/eredivisie', $payload);
    }
}
