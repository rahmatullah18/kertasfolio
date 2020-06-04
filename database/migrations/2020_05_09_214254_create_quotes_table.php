<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('comment_id');
            $table->string('quote');
            $table->string('pembuat');
            $table->string('slug');
            $table->timestamps();


            // foreign key
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('CASCADE');
            // foreign key komentar
            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotes');
    }
}
