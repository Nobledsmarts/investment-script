<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('whatsapp_number')->nullable();
            $table->string('site_address')->nullable();
            $table->string('site_name')->nullable();
            $table->string('site_logo')->nullable();
            $table->longText('site_about_us')->nullable();
            $table->longText('terms_and_conditions')->nullable();
            $table->longText('privacy_and_policy')->nullable();
            $table->longText('how_it_works')->nullable();
            $table->longText('meet_our_traders')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('telegram')->nullable();
            $table->string('medium')->nullable();
            $table->boolean('social_handles_active')->default(0);
            $table->string('site_email')->nullable();
            $table->integer('visit_count')->default(0);
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
        Schema::dropIfExists('site_settings');
    }
}
