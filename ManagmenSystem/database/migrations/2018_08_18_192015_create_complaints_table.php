<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('agentId');
            $table->unsignedInteger('department');
            $table->tinyInteger('status');
            $table->string('description');
            $table->string('resolvedBy');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('complaints');
    }
}
