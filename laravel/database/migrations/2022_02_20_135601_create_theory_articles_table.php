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
        Schema::create('theory_articles', function (Blueprint $table) {
            $table -> id();
            $table -> string('title');
            $table -> text('text');
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
        Schema::dropIfExists('theory_articles');
    }
};
