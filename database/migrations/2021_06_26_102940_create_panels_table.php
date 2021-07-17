<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('path_id');
            $table->string('title', 255);
            $table->string('panel', 120);
            $table->string('picture', 120);
            $table->text('description');
            $table->string('gif', 120);
            $table->timestamps();

            $table->foreign('path_id')
                ->references('id')
                ->on('paths')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panels');
    }
}
