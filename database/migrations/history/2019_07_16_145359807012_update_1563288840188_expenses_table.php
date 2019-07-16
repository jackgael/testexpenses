<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1563288840188ExpensesTable extends Migration
{
    public function up()
    {
        Schema::table('expenses', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_177385')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::table('expenses', function (Blueprint $table) {
        });
    }
}
