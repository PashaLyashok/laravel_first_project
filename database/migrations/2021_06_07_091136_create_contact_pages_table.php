<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_pages', function (Blueprint $table) {
            $table->id();
            $table->text('mainTitle1');
            $table->string('mainDesc1');
            $table->string('itemSpan1');
            $table->string('itemSpan2');
            $table->string('itemSpan3');
            $table->string('itemDesc1');
            $table->string('itemDesc2');
            $table->string('itemDesc3');
            $table->string('iframe');
            $table->text('mainTitle2');
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
        Schema::dropIfExists('contact_pages');
    }
}
