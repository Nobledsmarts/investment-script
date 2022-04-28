<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->boolean('is_admin')->default(0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('uid')->unique();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('lastname')->nullable();
            $table->text('avatar')->nullable();
            $table->enum('permission', ['1', '2', '3']);
            $table->boolean('suspended')->default(0);
            $table->boolean('invested')->default(0);
            $table->decimal('currently_invested', 20, 2)->default(0.00);
            $table->decimal('total_withdrawn', 20, 2)->default(0.00);
            $table->string('referrer_uid')->nullable();
            $table->decimal('deposit_balance', 20, 2)->default(0.00);
            $table->decimal('referral_bonus', 20, 2)->default(0.00);
            $table->decimal('deposit_interest', 20, 2)->default(0.00);
            
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
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
    }
}
