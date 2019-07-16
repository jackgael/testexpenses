<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1563287334491ExpenseCategoriesTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('expense_categories')) {
            Schema::create('expense_categories', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('expense_categories');
    }
}
