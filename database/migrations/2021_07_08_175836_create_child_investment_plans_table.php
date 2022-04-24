<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildInvestmentPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_investment_plans', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('parent_investment_plan_id');
            $table->string('name')->unique();
            $table->decimal('minimum_amount', 20, 2)->default(0.00);
            $table->decimal('maximum_amount', 20, 2)->default(0.00);
            $table->decimal('interest_rate', 5, 2);
            $table->decimal('referral_bonus', 5, 2)->default();
            $table->integer('duration')->default(1);
            $table->decimal('total_deposited', 20, 2)->default(0.00);
            $table->decimal('total_accepted', 20, 2)->default(0.00);
            $table->decimal('total_denied', 20, 2)->default(0.00);
            $table->boolean('active')->default(1);
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);

            $table->foreign('parent_investment_plan_id')->references('id')->on('parent_investment_plans')->onDelete('cascade');
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
