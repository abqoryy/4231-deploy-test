<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTeamTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "name" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "league" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "country" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "players" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('teams', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('teams', true); //If Exists drop table products
    }
}
