<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name_course', 255);
            $table->text('descricao_course');
            $table->decimal('value_course', 10,2);
            $table->string('duracao_course', 50);
            $table->string('instrutor_course', 255);
            $table->string('img_course', 255);
            $table->string('msg_course', 255);
            $table->integer('status_course');
            $table->integer('type_course');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
