<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPhotoColumnToTransfer extends Migration
{
    public function up()
    {
        $fields = [
            "photo" => [
                "type"=> "TEXT",
            ],
        ];

        $this->forge->addColumn('transfer', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('transfer', 'photo');
    }
}
