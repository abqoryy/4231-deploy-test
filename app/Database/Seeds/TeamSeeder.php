<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Manchester United',
            'league'    => 'Premier League',
            'country' => 'England',
            'players' => '25'

        ];

        // Simple Queries
        $this->db->table('teams')->insert($data);
        
        $data = [
            'name' => 'Manchester City',
            'league'    => 'Premier League',
            'country' => 'England',
            'players' => '27'
        ];
        // Using Query Builder
        $this->db->table('teams')->insert($data);
    }
}
