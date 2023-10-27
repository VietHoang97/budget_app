<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('amount', 10, 2);
            $table->decimal('interest_rate', 10, 2);
            $table->date('due_date');
            $table->unsignedInteger('primary_account_id');
            $table->unsignedInteger('secondary_account_id');
            $table->timestamps();

            $table->foreign('primary_account_id')->references('id')->on('accounts');
            $table->foreign('secondary_account_id')->references('id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('debts');
    }
};
