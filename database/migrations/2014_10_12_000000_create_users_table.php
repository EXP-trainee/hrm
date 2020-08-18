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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('phone_emergency')->nullable();
            $table->date('dob')->nullable();
            $table->string('national_id')->nullable();
            $table->string('national_id_image')->nullable();
            $table->string('driving_license')->nullable();
            $table->string('driving_license_image')->nullable();
            $table->text('address')->nullable();
            $table->string('relationship', 500)->nullable();
            $table->json('banks')->nullable();
            $table->integer('role')->default(0);
            $table->text('bio')->nullable();
            $table->tinyInteger('status');
            $table->rememberToken();
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
