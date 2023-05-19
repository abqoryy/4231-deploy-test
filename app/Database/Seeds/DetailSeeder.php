<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DetailSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Erling Haaland',
            'country'    => 'Norwegia',
            'position'    => 'ST',
            'age'    => 22,
            'market_value'    => 170,
            'team' => 'Manchester City'
        ];

        // Simple Queries
        $this->db->table('details')->insert($data);
        
        $data = [
            'name' => 'Kevin De Bruyne',
            'country'    => 'Belgium',
            'position'    => 'CM',
            'age'    => 30,
            'market_value'    => 80,
            'team' => 'Manchester City'
        ];
        // Using Query Builder
        $this->db->table('details')->insert($data);
    }
}
