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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->longText('comment');
            $table->unsignedBigInteger('fk_id_user')->nullable();
            $table->unsignedBigInteger('fk_id_image')->nullable();

            $table->foreign('fk_id_user')->references('id')->on('users')
                ->onDelete('set null');

            $table->foreign('fk_id_image')->references('id')->on('images')
            ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
