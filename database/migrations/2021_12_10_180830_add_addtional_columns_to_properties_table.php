<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddtionalColumnsToPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->string('location');
            $table->string('size');
            $table->string('email');
            $table->string('town');
            $table->decimal('phone', 10, 0);
            $table->string('state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('location');
            $table->dropColumn('size');
            $table->dropColumn('email');
            $table->dropColumn('town');
            $table->dropColumn('phone');
            $table->dropColumn('state');
        });
    }
}
