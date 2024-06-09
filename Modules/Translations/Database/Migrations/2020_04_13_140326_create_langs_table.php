<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable(false);
            $table->string('code')->nullable(false);
            $table->integer('status')->default(1);
            $table->timestamps();
        });

        Schema::create('_system_message', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category');
            $table->text('message');
            $table->timestamps();
        });

        Schema::create('_system_message_translation', function (Blueprint $table) {
            $table->integer('id');
            $table->string('language');
            $table->text('translation');
            $table->index(['id', 'language']);
            $table->foreign('id')->references('id')->on('_system_message');
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
        Schema::dropIfExists('_system_message_translation')->disableForeignKeyConstraints();
        Schema::dropIfExists('_system_message');
        Schema::dropIfExists('langs');
    }
}
