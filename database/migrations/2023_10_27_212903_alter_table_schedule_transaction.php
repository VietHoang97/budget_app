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
        Schema::table('schedule_transactions', function (Blueprint $table) {
            $table->foreignId('schedule_transaction_id')->constrained('transactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schedule_transactions', function (Blueprint $table) {
            $table->dropForeign('transaction_id');
        });
    }
};
