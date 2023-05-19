<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransferSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Lionel Messi',
            'age'    => 35,
            'team' => 'Barcelona',
            'price'    => 'Free Transfer',
            'wage'    => 10,
            'previous' => 'Paris Saint Germain',
            'country' => 'Argentina',
            'position' => 'RW',
        ];
        $this->db->table('transfer')->insert($data);


        $data = [
            'name' => 'Cristiano Ronaldo',
            'age'    => 38,
            'team' => 'Real Madrid',
            'price'    => 'Free Transfer',
            'wage'    => 10,
            'previous' => 'Al-Nassr',
            'country' => 'Portugal',
            'position' => 'ST',
        ];
        $this->db->table('transfer')->insert($data);
    }
}
