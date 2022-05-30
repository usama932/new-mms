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
        Schema::create('request_meetings', function (Blueprint $table) {
            $table->id();
            $table->string('client_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->date('requested_Date')->nullable();
            $table->time('requested_time')->nullable();
            $table->string('company_name')->nullable();
            $table->string('employees')->nullable();
            $table->string('website')->nullable();
            $table->longText('notes')->nullable();
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
        Schema::dropIfExists('request_meetings');
    }
};
