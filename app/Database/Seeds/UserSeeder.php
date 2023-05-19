<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Admin 1',
            'email'    => 'admin1@mail.com',
            'password'    => md5("secret"),
        ];

        // Simple Queries
        $this->db->table('users')->insert($data);

        $data = [
            'name' => 'Admin 2',
            'email'    => 'admin2@mail.com',
            'password'    => md5("secret123"),
        ];

        // Simple Queries
        $this->db->table('users')->insert($data);
    }
}