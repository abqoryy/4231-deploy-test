<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDetailsTable extends Migration
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
            "country" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "position" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "age" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
            "market_value" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('details', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('details', true); //If Exists drop table products
    }
}
