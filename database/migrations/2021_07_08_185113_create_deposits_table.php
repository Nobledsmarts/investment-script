<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('child_investment_plan_id');
            $table->unsignedBigInteger('wallet_id');
            $table->string('transaction_hash')->unique();
            $table->decimal('amount', 20, 2)->default(0.00);
            $table->integer('remaining_duration');
            $table->boolean('reinvestment')->default(0);
            $table->timestamp('expires_at')->nullable();
            $table->boolean('is_expired')->default(0);
            $table->enum('status', ['pending', 'accepted', 'denied']);
            $table->boolean('running')->default(0);
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('denied_at')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('child_investment_plan_id')->references('id')->on('child_investment_plans')->onDelete('cascade');
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
        Schema::dropIfExists('deposits');
    }
}
