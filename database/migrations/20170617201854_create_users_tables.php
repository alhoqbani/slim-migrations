<?php

use App\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTables extends Migration
{
    
    
    public function up()
    {
        $this->schema->create('users', function (Blueprint $table) {
            $table->increments('id');
            
            $table->timestamps();
        });
    }
    
    public function down()
    {
        $this->schema->drop('users');
    }
    
}
