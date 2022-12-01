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
        Schema::create('vcards', function (Blueprint $table) {
            $table->id();
            $table->string('lastname')->nullable()->default('N/A');
            $table->string('firstname')->nullable()->default('N/A');
            $table->string('additional')->nullable()->default('N/A');
            $table->string('prefix')->nullable()->default('N/A');
            $table->string('suffix')->nullable()->default('N/A');
            $table->string('company')->nullable()->default('N/A');
            $table->string('jobtitle')->nullable()->default('N/A');
            $table->string('role')->nullable()->default('N/A');
            $table->string('email')->nullable()->default('N/A');
            $table->string('phone_pref_work')->nullable()->default('N/A');
            $table->string('phone_work')->nullable()->default('N/A');
            $table->string('address_name')->nullable()->default('N/A');
            $table->string('address_extended')->nullable()->default('N/A');
            $table->string('address_street')->nullable()->default('N/A');
            $table->string('address_city')->nullable()->default('N/A');
            $table->string('address_region')->nullable()->default('N/A');
            $table->string('address_zip')->nullable()->default('N/A');
            $table->string('address_country')->nullable()->default('N/A');
            $table->string('adresss_label')->nullable()->default('N/A');
            $table->string('website')->nullable()->default('N/A');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vcards');
    }
};
