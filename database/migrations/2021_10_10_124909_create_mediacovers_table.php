<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediacoversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediacovers', function (Blueprint $table) {
           
                $table->id();
                $table->integer('course_id')->nullable();
                $table->string('title')->nullable();
                $table->string('file_path')->nullable();
                $table->string('file_type')->nullable();
                $table->timestamps();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mediacovers');
    }
}
