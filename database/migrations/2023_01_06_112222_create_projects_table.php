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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            // Project Responsible
            $table->string('last_name');
            $table->string('first_name');
            $table->biginteger('phone');
            $table->string('email')->unique();
            // Project informations
            $table->string('title');
            $table->text('content');
            $table->date('begining_project_date');
            $table->date('ending_project_date');
            $table->enum('project_status', ['terminé', 'en_cours', 'annulé']);
            $table->integer('days_spent');
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
        Schema::dropIfExists('projects');
    }
};
