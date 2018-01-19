<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeviceLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('deviceLogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('device_id');
            $table->string('humidity');
            $table->string('temprature');
            $table->string('lat');
            $table->string('long');
            
            
            $table->rememberToken();
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
        Schema::drop('deviceLogs');
    }
}
