<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('full_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('password');
            $table->bigInteger('balance')->default(0);
            $table->rememberToken();
            $table->integer('is_deleted')->default(0);
            $table->integer('photo_id')->nullable();
            $table->integer('status')->default(1);
            $table->integer('reason_id')->nullable();
            $table->integer('region_id')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
