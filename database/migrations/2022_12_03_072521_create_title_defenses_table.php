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
        Schema::create('title_defenses', function (Blueprint $table) {
            $table->id();
            $table->integer('team_id')->nullable();
            $table->string('title')->nullable();
            $table->string('project_description')->nullable();
            $table->string('objective')->nullable();
            $table->string('motivation')->nullable();
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
        Schema::dropIfExists('title_defenses');
    }
};
