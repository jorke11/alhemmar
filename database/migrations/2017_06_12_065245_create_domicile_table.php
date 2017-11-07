<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomicileTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('domicile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('document_id')->nullable();
            $table->integer('document')->nullable();
            $table->integer('city_expedition_id')->nullable();
            $table->datetime('expedition_date')->nullable();
            $table->integer('city_birth_id')->nullable();
            $table->datetime('birth_date')->nullable();
            $table->integer('blood_group')->nullable();
            $table->integer('age')->nullable();
            $table->integer('civil_status_id')->nullable();
            $table->integer('time_married')->nullable();
            $table->integer('quantity_child')->nullable();
            $table->integer('address')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('location')->nullable();
            $table->integer('stratum')->nullable();
            $table->string('email')->nullable();
            $table->string('aspiration')->nullable();
            $table->string('phone')->nullable();
            $table->integer('status_id')->nullable();
            $table->text('concept')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('domicile');
    }

}
