<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnPreviousTeamToTransfer extends Migration
{
    public function up()
    {
        $fields = [
            "previous" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
        ];

        $this->forge->addColumn('transfer', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('transfer', 'previous');
    }
}
