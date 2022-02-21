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
        Schema::create('practice_tasks', function (Blueprint $table) {
            $table -> id();
            $table -> string('title');
            $table -> text('text');
            $table -> text('answer');
            $table -> unsignedBigInteger('creator_id');
            $table -> index('creator_id', 'creator_id_idx');
            $table -> foreign('creator_id', 'creator_id_idx') -> references('id') -> on('users');
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
        Schema::dropIfExists('practice_tasks');
    }
};
