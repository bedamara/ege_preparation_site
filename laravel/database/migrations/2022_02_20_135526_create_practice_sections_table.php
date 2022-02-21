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
        Schema::create('practice_sections', function (Blueprint $table) {
            $table -> id('id');
            $table -> string('title');
            $table -> text('description');
            $table -> unsignedBigInteger('creator_id');
            $table -> foreign('creator_id') -> references('id') -> on('users');
            $table -> date('creation_date');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practice_sections');
    }
};
