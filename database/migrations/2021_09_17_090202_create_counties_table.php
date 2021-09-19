<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counties', function (Blueprint $table) {
            $table->id();
            $table->integer('county_number');
            $table->string("name");
            $table->timestamps();
        });

            DB::table('counties')->insert(
            array(
            array('name' => 'Mombasa', 'county_number' => "1"),
            array('name' => 'Kwale', 'county_number' => "2"),
            array('name' => 'Kilifi', 'county_number' => "3"),
            array('name' => 'Tana River', 'county_number' => "4"),
            array('name' => 'Lamu', 'county_number' => "5"),
            array('name' => 'Taita Taveta', 'county_number' => "6"),
            array('name' => 'Garissa', 'county_number' => "7"),
            array('name' => 'Wajir', 'county_number' => "8"),
            array('name' => 'Mandera', 'county_number' => "9"),
            array('name' => 'Marsabit', 'county_number' => "10"),
            array('name' => 'Isiolo', 'county_number' => "11"),
            array('name' => 'Meru', 'county_number' => "12"),
            array('name' => 'Tharaka-Nithi', 'county_number' => "13"),
            array('name' => 'Embu', 'county_number' => "14"),
            array('name' => 'Kitui', 'county_number' => "15"),
            array('name' => 'Machakos', 'county_number' => "16"),
            array('name' => 'Makueni', 'county_number' => "17"),
            array('name' => 'Nyandarua', 'county_number' => "18"),
            array('name' => 'Nyeri', 'county_number' => "19"),
            array('name' => 'Kirinyaga', 'county_number' => "20"),
            array('name' => 'Muranga', 'county_number' => "21"),
            array('name' => 'Kiambu', 'county_number' => "22"),
            array('name' => 'Turkana', 'county_number' => "23"),
            array('name' => 'West Pokot', 'county_number' => "24"),
            array('name' => 'Samburu', 'county_number' => "25"),
            array('name' => 'Trans-Nzoia', 'county_number' => "26"),
            array('name' => 'Uasin Gishu', 'county_number' => "27"),
            array('name' => 'Elgeyo Marakwet', 'county_number' => "28"),
            array('name' => 'Nandi', 'county_number' => "29"),
            array('name' => 'Baringo', 'county_number' => "30"),
            array('name' => 'Laikipia', 'county_number' => "31"),
            array('name' => 'Nakuru', 'county_number' => "32"),
            array('name' => 'Narok', 'county_number' => "33"),
            array('name' => 'Kajiado', 'county_number' => "34"),
            array('name' => 'Kericho', 'county_number' => "35"),
            array('name' => 'Bomet', 'county_number' => "36"),
            array('name' => 'Kakamega', 'county_number' => "37"),
            array('name' => 'Vihiga', 'county_number' => "38"),
            array('name' => 'Bungoma', 'county_number' => "39"),
            array('name' => 'Busia', 'county_number' => "40"),
            array('name' => 'Siaya', 'county_number' => "41"),
            array('name' => 'Kisumu', 'county_number' => "42"),
            array('name' => 'Homa Bay', 'county_number' => "43"),
            array('name' => 'Migori', 'county_number' => "44"),
            array('name' => 'Kisii', 'county_number' => "45"),
            array('name' => 'Nyamira', 'county_number' => "46"),
            array('name' => 'Nairobi', 'county_number' => "47"),
            
            
        )
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counties');
    }
}