<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_wallets', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id');
            $table->string('currency')->unique();
            $table->string('currency_symbol')->unique();
            $table->string('color');
            $table->boolean('active')->default(1);
            $table->boolean('has_memo')->default(0);
            $table->string('currency_address')->nullable();
            $table->string('memo_token')->nullable();
            $table->decimal('total_traded', 20, 2);
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_wallets');
    }
}
