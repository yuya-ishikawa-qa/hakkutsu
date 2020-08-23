<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('name_kana');
            $table->string('postal_code');  // 郵便番号
            $table->string('address_1');  // 住所 1
            $table->string('address_2');  // 住所 2
            $table->string('address_3');  // 住所 3
            $table->string('tel');  // 電話番号
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('destination_postal_code')->nullable();  // 送付先郵便番号
            $table->string('destination_1')->nullable();  // 送付先 1
            $table->string('destination_2')->nullable();  // 送付先 2
            $table->string('destination_3')->nullable();  // 送付先 3
            $table->rememberToken();
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
