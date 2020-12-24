<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complains', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->unsignedBigInteger('customer_id');
            $table->string('phone',16);
            $table->string('led_color',20);
            $table->longText('problem');
            $table->text('remark');
            $table->unsignedBigInteger('assigned_technician_id');
            $table->dateTime('assigned_time');
            $table->enum('service_team_status',['default','onassign','processing','done']);
            $table->dateTime('service_status_time');
            $table->enum('customer_status',['default','done']);
            $table->dateTime('customer_status_time');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('assigned_technician_id')->references('id')->on('technician_users')->onDelete('cascade');
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
        Schema::dropIfExists('complains');
    }
}
