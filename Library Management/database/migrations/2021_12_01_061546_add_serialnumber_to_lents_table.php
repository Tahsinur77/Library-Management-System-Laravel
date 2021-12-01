<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSerialnumberToLentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lents', function (Blueprint $table) {
            //
            $table->string('serialnumber',100)->after('phonenumber');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lents', function (Blueprint $table) {
            //
            $table->dropColoum('serialnumber');
        });
    }
}
