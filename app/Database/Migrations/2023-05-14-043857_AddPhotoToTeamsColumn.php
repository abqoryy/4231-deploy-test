<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPhotoToTeamsColumn extends Migration
{
    public function up()
    {
        $fields = [
            "photo" => [
                "type"=> "TEXT",
            ],
        ];

        $this->forge->addColumn('teams', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('teams', 'photo');
    }
}
