<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('store_id')->unsigned()->index();
            $table->bigInteger('tax_id')->unsigned();
            $table->string('item_name');
            $table->string('status');
            $table->string('stock');
            $table->string('price');
            $table->string('image_path');
            $table->text('description')->null();
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->softDeletes();

            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
