<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfitCronJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profit_cron_jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('deposit_id');
            $table->unsignedBigInteger('child_investment_plan_id');
            $table->unsignedBigInteger('user_wallet_id');
            $table->string('transaction_hash');
            $table->decimal('interest_received', 20, 2);
            $table->decimal('deposit_balance', 20, 2);
            $table->decimal('currently_invested_balance', 20, 2);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('child_investment_plan_id')->references('id')->on('child_investment_plans')->onDelete('cascade');
            $table->foreign('user_wallet_id')->references('id')->on('user_wallets')->onDelete('cascade');
            $table->foreign('deposit_id')->references('id')->on('deposits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profit_cron_jobs');
    }
}
