<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('last_name', 45)->index();
            $table->string('first_name', 45)->index();
            $table->string('middle_name', 45)->index();
            $table->string('birth_date')->nullable();
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('academy_groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
