<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferrersInterestRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referrers_interest_relationships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('interest_receiver_id');
            $table->unsignedBigInteger('depositor_id');
            $table->unsignedBigInteger('deposit_id');
            $table->decimal('amount', 20, 2)->default(0.00);
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);

            $table->foreign('interest_receiver_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('depositor_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('referrers_interest_relationships');
    }
}
