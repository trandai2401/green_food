<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->integer('transport_fee')->nullable();
            $table->unsignedBigInteger('status_id')->nullable();
            $table->string('district_id')->nullable();

            $table->integer('total')->nullable()->default(0);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('invoice_statuses');

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
        Schema::dropIfExists('invoices');
    }
}
