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
            $table->bigIncrements('id')->comment("ID");
            $table->string('email')->unique()->comment("E-Mail");
            $table->timestamp('email_verified_at')->nullable()->comment("メール認証日時");
            $table->string('password')->nullable()->comment("パスワード");
            $table->string('token')->nullable()->comment("TwitterOAuthトークン");;
            $table->rememberToken()->comment("パスワードリセットトークン");;
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
