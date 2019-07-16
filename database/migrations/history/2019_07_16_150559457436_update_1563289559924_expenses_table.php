<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1563289559924ExpensesTable extends Migration
{
    public function up()
    {
        Schema::table('expenses', function (Blueprint $table) {
            $table->unsignedInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_177439')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::table('expenses', function (Blueprint $table) {
        });
    }
}
