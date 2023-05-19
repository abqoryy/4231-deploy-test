<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTeamColumnToDetails extends Migration
{
    public function up()
    {
        $fields = [
            "team" => [
                "type"=> "TEXT",
            ],
        ];

        $this->forge->addColumn('details', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('details', 'team');
    }
}
