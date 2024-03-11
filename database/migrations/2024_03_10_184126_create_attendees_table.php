<?php

// database/migrations/xxxx_xx_xx_create_attendees_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendeesTable extends Migration
{

    // database/migrations/xxxx_xx_xx_create_invitados_table.php
public function up()
{
    Schema::create('invitados', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
    
        $table->timestamps();
    });
}

}
