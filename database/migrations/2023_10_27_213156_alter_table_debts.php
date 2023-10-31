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
        Schema::table('debts', function (Blueprint $table) {
            $table->foreignId('debt_primary_account_id')->constrained('accounts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('debt_secondary_account_id')->constrained('accounts')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('debts', function (Blueprint $table) {
            $table->dropForeign('primary_account_id');
            $table->dropForeign('secondary_account_id');
        });
    }
};
