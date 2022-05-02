<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('wallet_id');
            $table->string('wallet_address');
            $table->string('transaction_hash');
            $table->decimal('amount', 20, 2);
            $table->enum('status', ['pending', 'accepted', 'denied']);
            $table->enum('type', ['deposit_balance', 'deposit_interest', 'referral_bonus']);
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('denied_at')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('wallet_id')->references('id')->on('main_wallets')->onDelete('cascade');
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
        Schema::dropIfExists('main_wallets');
        Schema::dropIfExists('withdrawals');
    }
}
