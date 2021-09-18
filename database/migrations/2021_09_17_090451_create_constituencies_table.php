<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstituenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constituencies', function (Blueprint $table) {
             $table->id();
            $table->integer('county_number');
            $table->string('name');
            $table->timestamps();
        });
         DB::table('constituencies')->insert(
            array(
                array('name' => ' Changamwe', 'county_number' => "1"),
                array('name' => ' Jomvu', 'county_number' => "1"),
                array('name' => ' Kisauni', 'county_number' => "1"),
                array('name' => ' Nyali', 'county_number' => "1"),
                array('name' => ' Likoni', 'county_number' => "1"),
                array('name' => ' Mvita', 'county_number' => "1"),
                array('name' => ' Msambweni', 'county_number' => "2"),
                array('name' => ' Lunga Lunga', 'county_number' => "2"),
                array('name' => ' Matuga', 'county_number' => "2"),
                array('name' => '  Kinango', 'county_number' => "2"),
                array('name' => '  Kilifi North', 'county_number' => "3"),
                array('name' => '  Kilifi South', 'county_number' => "3"),
                array('name' => '  Kaloleni', 'county_number' => "3"),
                array('name' => '   Rabai', 'county_number' => "3"),
                array('name' => '  Ganze', 'county_number' => "3"),
                array('name' => '   Malindi,', 'county_number' => "3"),
                array('name' => '  Magarini', 'county_number' => "3"),
                array('name' => '   Garsen', 'county_number' => "4"),
                array('name' => '   Galole', 'county_number' => "4"),
                array('name' => '   Bura', 'county_number' => "4"),
                array('name' => '  Lamu East', 'county_number' => "5"),
                array('name' => '  Lamu West', 'county_number' => "5"),
                array('name' => '   Taveta', 'county_number' => "6"),
                array('name' => '  Wundanyi', 'county_number' => "6"),
                array('name' => '   Mwatate', 'county_number' => "6"),
                array('name' => ' Voi', 'county_number' => "6"),
                

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
        Schema::dropIfExists('constituencies');
    }
}