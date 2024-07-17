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
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')
            ->on('userdatas')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('user_id')->constrained('userdata');
            $table->string('email',40)->unique();
            $table->string('password',30)->default('No password')->nullable();
            $table->string('age',99)->default('unknown age');
            $table->string('address')->default('address is not provide');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_infos');
    }
};
