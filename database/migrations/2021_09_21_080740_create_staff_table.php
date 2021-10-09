<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->foreignId("admin_id")->references('id')->on('users');
            $table->string('staff_profile')->nullable();
            $table->string('firstname');
            $table->string('surname');
            $table->string('othername');
            $table->string('email');
            $table->string('phone');
            $table->date('dob');
            $table->string('gender');
          
            $table->string('id_number');
           
            $table->string('county');
            $table->string('constituency');
            $table->string('kra_pin')->default(0);
            $table->string('bank_name')->default(0);
            $table->string('acc_number')->default(0);
            $table->boolean('is_admin')->default(0);
            $table->boolean('is_blocked')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
