<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCountryAndPositionToTransfer extends Migration
{
    public function up()
    {
        $fields = [
            "country" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "position" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
        ];

        $this->forge->addColumn('transfer', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('transfer','country');
        $this->forge->dropColumn('transfer','position');
    }
}

