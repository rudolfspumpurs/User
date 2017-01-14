<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone', 16);
            $table->string('title', 16);
            $table->string('country', 16);
            $table->string('address', 255);
            $table->string('language', 2);
            $table->integer('markup');
            $table->integer('vat');
            $table->string('currency', 3);
            $table->double('currency_rate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('title');
            $table->dropColumn('country');
            $table->dropColumn('address');
            $table->dropColumn('language');
            $table->dropColumn('markup');
            $table->dropColumn('vat');
            $table->dropColumn('currency');
            $table->dropColumn('currency_rate');
        });
    }
}
