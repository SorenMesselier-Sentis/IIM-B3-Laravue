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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            // juridical informations
            $table->string('name');
            $table->text('content');
            $table->string('social_reason');
            $table->enum('juridical_status', ['EI', 'EIRL', 'EURL', 'SARL', 'SNC', 'SEARL', 'SCP', 'SAS', 'SASU']);
            $table->integer('capital');
            $table->integer('siret_number')->unique();
            $table->string('naf_code');
            // address
            $table->string('country');
            $table->string('address');
            $table->integer('zipcode');
            $table->string('city');
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
        Schema::dropIfExists('clients');
    }
};
