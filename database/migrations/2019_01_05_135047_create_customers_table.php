<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',20);
            $table->string('phone',20);
            $table->string('mobile',20)->nullabel();
            $table->string('goods_id',255);
            $table->string('address',255);
            $table->string('totap_price',100)->default(0);
            $table->string('pay_money',100)->default(0);
            $table->tinyInteger('pay_status')->default(0);
            $table->tinyInteger('isvip')->default(0);
            $table->tinyInteger('delflag')->default(0);
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
        Schema::dropIfExists('customers');
    }
}
