<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
                $table->string('firstname')->after('id');
                $table->string('lastname')->after('firstname');
                $table->string('role')->after('lastname');
                $table->string('phone')->after('email');
                $table->dropColumn('name');
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
            $table->dropColumn('firstname');
            $table->dropColumn('lastname');
            $table->dropColumn('role');
            $table->string('name');
    });
    }
};
