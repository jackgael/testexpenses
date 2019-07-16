<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1563289441670ExpensesTable extends Migration
{
    public function up()
    {
        Schema::table('expenses', function (Blueprint $table) {
            $table->dropForeign('user_fk_177385');
            $table->dropColumn('user_id');
        });
    }

    public function down()
    {
        Schema::table('expenses', function (Blueprint $table) {
        });
    }
}
