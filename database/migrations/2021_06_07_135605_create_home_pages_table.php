<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();

            $table->string('firstSectionTitle');
            $table->text('firstSectionDesc');
            $table->string('bannerVideoLink');
            $table->text('bannerButtonDesc');
            
            $table->string('secondSectionMaxTitle');
            $table->text('secondSectionMinTitle');
            $table->string('secondSectionDesc');
            $table->text('secondSectionButtonDesc');

            $table->string('thirdSectionMaxTitle');
            $table->text('thirdSectionMinTitle');
            
            $table->text('lastSectionTitle');
            $table->string('lastSectionDesc');
            $table->text('lastSectionButtonDesc');

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
        Schema::dropIfExists('home_pages');
    }
}
