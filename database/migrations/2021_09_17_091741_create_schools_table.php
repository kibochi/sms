<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
              $table->id();
            $table->foreignId("admin_id")->references('id')->on('users');
          
            $table->string('school_name');
            $table->string('prefix_name');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('county');
            $table->string('constituency');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}