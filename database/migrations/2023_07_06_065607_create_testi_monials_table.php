<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestiMonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testi_monials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('t_person_name');
            $table->string('t_person_image');
            $table->string('t_person_review');
            $table->string('t_del_yn')->default('n');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testi_monials');
    }
}
