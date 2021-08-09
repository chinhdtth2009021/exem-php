<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     q
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->increments('bookId');
            $table->integer('authorId')->default(0);
            $table->string('title', 55);
            $table->string('ISBN');
            $table->string('attributes');
            $table->id('default');
            $table->id('comment');
            $table->id('extra');
            $table->id('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libraries');
    }
}
