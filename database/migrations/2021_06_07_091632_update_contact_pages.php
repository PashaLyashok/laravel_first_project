<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateContactPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact_pages', function (Blueprint $table) {
            $table->dropColumn('mainTitle1');
            $table->string('firstTitle');

            $table->dropColumn('mainDesc1');
            $table->string('firstDesc');

            $table->dropColumn('itemSpan1');
            $table->string('firstItemTitle');

            $table->dropColumn('itemSpan2');
            $table->string('secondItemTitle');

            $table->dropColumn('itemSpan3');
            $table->string('thirdItemTitle');

            $table->dropColumn('itemDesc1');
            $table->string('firstItemDesc');

            $table->dropColumn('itemDesc2');
            $table->string('secondItemDesc');

            $table->dropColumn('itemDesc3');
            $table->string('thirdItemDesc');

            $table->dropColumn('mainTitle2');
            $table->string('secondTitle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_pages', function (Blueprint $table) {
            //
        });
    }
}
