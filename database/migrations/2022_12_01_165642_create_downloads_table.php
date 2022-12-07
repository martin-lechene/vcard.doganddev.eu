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
        Schema::create('downloads', function (Blueprint $table) {
            $table->id();
            $table->string('ip', 15)->default('NO IP FOUND')->nullable()->comment('Ip of user');
            $table->string('user_agent', 255)->nullable()->default(null)->comment('User agent of current user');
            $table->integer('vcard_id', 255)->relation('vcard')->index('id')->onDelete('cascade')->onUpdate('cascade')->nullable()->default(null)->comment('VCard ID');
            $table->integer('count')->nullable()->default(0)->comment('Count of downloads');
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
        Schema::dropIfExists('download');
    }
};
