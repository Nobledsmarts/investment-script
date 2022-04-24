<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_wallets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('main_wallet_id');
            $table->string('currency_address')->nullable();
            $table->string('memo_token')->nullable();
            $table->boolean('has_memo')->default(0);
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('main_wallet_id')->references('id')->on('main_wallets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('child_investment_plans');
    }
}
